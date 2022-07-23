<?php

namespace App\Services\Properties;

use App\Models\Properties\Property;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyPhoto;
use App\Models\Properties\PropertyType;
use App\Models\State;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

/**
 * Class PropertyService.
 */
class PropertyService extends BaseService
{
    public static function property(){
        return new Property();
    }

    public static function propertyWithRelationships(){
        return self::property()->with('realtor', 'state', 'property_type', 'property_photos');
    }

    public static function propertyApproved(){
        return self::property()->with('realtor', 'state', 'property_type', 'property_photos')
            ->where('status', 1);
    }

    public static function propertyPhoto(){
        return new PropertyPhoto();
    }

    public static function propertyPhotoWithRelationships(){
        return self::propertyPhoto()->with('property');
    }

    public static function searchProperties($request){

        $input = $request->all();
        // check all input fields for empty fields
        // if only one field has value, it can only be csrf token
        // Then trigger empty fields warning
        $hasInput = 0;
        foreach($input as $value){
            if(!empty($value)){
                $hasInput++;
            }
        }
        if($hasInput === 1){
            Session::flash('warning', 'search fields are empty');
            return redirect()->back();
        }

        // forget these sessions
        $session_arrays = ['search_inputs', 'no-results'];
        foreach($session_arrays as $session){
            if(Session::has($session)){
                Session::forget($session);
            }
        }

        Session::put('search_inputs', []);

        // add field names to session arrays for search result summary
        if(!empty($input['term'])) {
            Session::push('search_inputs', ['term' => $input['term']]);
        }
        if(!empty($input['property_type_id'])){
            Session::push('search_inputs', ['property_type_id' => $input['property_type_id']]);
        }
        if(!empty($input['state_id'])){
            Session::push('search_inputs', ['state_id' => $input['state_id']]);
        }
        if(!empty($input['bedrooms'])){
            Session::push('search_inputs', ['bedrooms' => $input['bedrooms']]);
        }
        if(!empty($input['living_rooms'])){
            Session::push('search_inputs', ['living_rooms' => $input['living_rooms']]);
        }
        if(!empty($input['max_cost'])){
            Session::push('search_inputs', ['max_cost' => $input['max_cost']]);
        }
        if(!empty($input['min_cost'])){
            Session::push('search_inputs', ['min_cost' => $input['min_cost']]);
        }

        $properties = self::PropertyApproved()
            ->wherehas('property_type', function ($query) use ($input){
                $query->when(!empty($input['term']), static function($type) use($input){
                    $type->where('name', 'like' , '%'. $input['term'] .'%');
                });
            })->wherehas('state', function ($query) use ($input){
                $query->when(!empty($input['term']), static function($state) use($input){
                    $state->where('name', 'like' , '%'. $input['term'] .'%');
                });

            })->where(static function($query) use ($input){
                $query->when(!empty($input['term']), static function($term) use($input){
                    return $term->where('title', 'like' , '%'. $input['term'] .'%');

                })->when(!empty($input['property_type_id']), static function ($term) use($input){
                    return $term->where('property_type_id', $input['property_type_id']);

                })->when(!empty($input['state_id']), static function ($term) use($input){
                    return $term->where('state_id', $input['state_id']);

                })->when(!empty($input['bedrooms']), static function ($term) use($input){
                    return $term->where('bedrooms', $input['bedrooms']);

                })->when(!empty($input['bathrooms']), static function ($term) use($input){
                    return $term->where('bathrooms', $input['bathrooms']);

                })->when(!empty($input['living_rooms']), static function ($term) use($input){
                    return $term->where('living_rooms', $input['living_rooms']);

                })->when(!empty($input['min_cost']), static function ($term) use($input){
                    return $term->where('cost', '>=' , $input['min_cost']);

                })->when(!empty($input['max_cost']), static function ($term) use($input){
                    return $term->where('cost', '<=' , $input['max_cost']);
                });
            })->paginate(15);

        // get total results
//        if($data['properties']->total() > 0){
//            return $data;
//        }else{
//            $data['countResults'] = 0;
//        }
//        if($data['properties']->first()){
//            return view('home.properties.index', $data);
//        }
        Session::put('no-results', 'No result');
        return $properties;

    }

    public static function submitProperty($request){

        $input = $request->all();
        $input['realtor_id'] = Auth::user()->id;
        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;
        $input['square_feet'] = $request['square_feet'] === "null" ? Null : $request['square_feet'];

        $property = self::property()->create($input);

        // Submit images using for loop
        if(!empty($request->images)){
            for($i = 0, $count = count($request->images); $i < $count; $i++){
                if(isset($request['images'][$i])){
                    $file = $request->file('images')[$i];
                    $path = 'photos/properties';
                    if (!File::exists($path)){
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }
                    $name = time() . $file->getClientOriginalName();
                    //Move image to photos directory
                    $file->move($path, $name);
                }else{
                    $name = null;
                }

                // Submit photos
                self::PropertyPhoto()->create([
                    'property_id' => $property->id,
                    'image' => $name,
                ]);
            }
        }

    }

    public static function getAndEditProperty($id){
        $property = self::propertyWithRelationships()->findOrFail($id);

        $images = [];
        if(count($property->property_photos) > 0){
            foreach($property->property_photos as $photo){
                $images[] = $photo->image;
            }
        }

        return response()->json([
            "success" => true,
            "property" => $property,
            "images" => $images
        ]);
    }

    public static function deletePropertyPhoto($image){
        $photo = self::propertyPhoto()->where('image', $image)->first();
        if(File::exists(public_path() . '/photos/properties/' . $photo->image)){
            FILE::delete(public_path() . '/photos/properties/' . $photo->image);
        }
        $photo->delete();
    }

    public static function updateProperty($request, $id){
        $input = $request->all();
        $property = self::propertyWithRelationships()->findOrFail($id);
        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;
        $input['square_feet'] = $request['square_feet'] === "null" ? Null : $request['square_feet'];

        $property->update($input);

        // add property photos to oldPhotos array
        $oldPhotos = [];
        foreach($property->property_photos as $photo){
            $oldPhotos[] = $photo->image;
        }

        $propertyPhotos = self::propertyPhoto();

        // Add any new images that were recently uploaded
        if(!empty($request->images)){
            for($i = 0, $count = count($request->images); $i < $count; $i++){
                if(isset($request['images'][$i]) && !in_array($request['images'][$i], $oldPhotos)){
                    $file = $request->file('images')[$i];
                    $path = 'photos/properties';
                    if(!File::exists($path)){
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }
                    $name = time() . $file->getClientOriginalName();
                    //Move image to photos directory
                    $file->move($path, $name);

                    // Submit photos
                    $propertyPhotos->create([
                        'image' => $name,
                        'property_id' => $property->id,
                    ]);
                }
            }
        }

        // Delete images that were not part of the recently uploaded batch
        // Not working as it should. Fix this later
//        foreach($property->property_photos as $photo){
//            if(!in_array($photo->image, $request->images) && File::exists(public_path() . '/photos/properties/' . $photo->image)){
//                FILE::delete(public_path() . '/photos/properties/' . $photo->image);
//                $propertyPhotos->where('id', $photo->id)->delete();
//            }
//        }
    }

    public static function approveProperty($id){
        $property = self::property()->findOrFail($id);

        if($property->status === 1){
            $property->status = 0;
        }else{
            $property->status = 1;
        }
        $property->save();

        return $property;
    }

    public static function deleteProperty($id){
        $property = self::property()->findOrFail($id);

        if(count($property->property_photos) > 0){
            foreach($property->property_photos as $photo){
                if(!empty($photo->image) && File::exists(public_path() . '/photos/properties/' . $photo->image)) {
                    FILE::delete(public_path() . '/photos/properties/' . $photo->image);
                }
            }
        }

        $property->delete();
    }

}
