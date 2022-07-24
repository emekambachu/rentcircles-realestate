<?php

namespace App\Services\Realtor;

use App\Services\Properties\PropertyService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

/**
 * Class RealtorPropertyService.
 */
class RealtorPropertyService extends PropertyService
{
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
