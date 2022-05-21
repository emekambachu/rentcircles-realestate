<?php

namespace App\Http\Controllers\Realtor;

use App\Http\Controllers\Controller;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyPhoto;
use App\Models\Properties\PropertyType;
use App\Models\Realtor\Realtor;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as InterventionImage;
use Illuminate\Support\Facades\File;

class RealtorAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth:realtor');
    }

    public function dashboard(){
        return view('realtors.index');
    }

    public function getProfile(){
        $profile = Realtor::findOrFail(Auth::user()->id);
        return response()->json([
            'success' => true,
            'profile' => $profile
        ], 200);
    }

    public function propertyStats(){
        $properties = new PropertyDetail();
        $recentProperties = $properties->with('property_type', 'property_photos')
            ->where('realtor_id', Auth::user()->id)
            ->latest()->limit(10)->get();
        $totalProperties = $properties->where('realtor_id', Auth::user()->id)->count();

        return response()->json([
           'success' => true,
           'recent_properties' => $recentProperties,
           'total_properties' => $totalProperties,
        ]);
    }

    public function submitProperty(Request $request){
        $input = $request->all();
        $rules = array(
            'property_type_id' => 'required',
            'state_id' => 'required',
            'title' => 'required|string|unique:property_details,title',
            'address' => 'required',
            'description' => 'required',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'square_feet' => 'nullable|numeric',
            'living_rooms' => 'required|numeric',
            'cost' => 'required|numeric',
            'features' => 'nullable',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        $input['realtor_id'] = Auth::user()->id;
        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;

        $property = PropertyDetail::create($input);

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
                PropertyPhoto::create([
                    'property_detail_id' => $property->id,
                    'image' => $name,
                ]);
            }
        }

        return response()->json([
            "success" => true,
            "message" => "Property submitted successfully, will be published once approved"
        ]);
    }

    public function myProperties(){
        $properties = PropertyDetail::with('state', 'property_type', 'property_reviews', 'property_photos')
            ->where('realtor_id', Auth::user()->id)->get();

        if($properties->count() > 0){
            return response()->json([
                "success" => true,
                "properties" => $properties
            ]);
        }

        return response()->json([
            "success" => false,
        ]);
    }

    public function myPropertyEdit($id){
        $property = PropertyDetail::with('property_type', 'state', 'property_photos')->findOrFail($id);

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

    public function myPropertyUpdate(Request $request, $id){

        $property = PropertyDetail::findOrFail($id);
        $input = $request->all();
        $rules = array(
            'property_type_id' => 'required',
            'state_id' => 'required',
            'title' => 'required|string|unique:property_details,title,'.$id,
            'address' => 'required',
            'description' => 'required',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'square_feet' => 'nullable|numeric',
            'living_rooms' => 'required|numeric',
            'cost' => 'required|numeric',
            'features' => 'nullable',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }


        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;
        $property->update($input);

        // add property photos to oldPhotos array
        $oldPhotos = [];
        foreach($property->property_photos as $photo){
            $oldPhotos[] = $photo->image;
        }

        $propertyPhotos = new PropertyPhoto();

        // Add any new images that were recently uploaded
        if(!empty($request->images)){
            for($i = 0, $count = count($request->images); $i < $count; $i++){
                if(isset($request['images'][$i]) && !in_array($request['images'][$i], $oldPhotos)){
                    $file = $request->file('images')[$i];
                    $path = 'photos/properties';
                    if (!File::exists($path)){
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }
                    $name = time() . $file->getClientOriginalName();
                    //Move image to photos directory
                    $file->move($path, $name);

                    // Submit photos
                    $propertyPhotos->create([
                        'image' => $name,
                        'property_detail_id' => $property->id,
                    ]);
                }
            }
        }

        // Delete images that were not part of the recently uploaded batch
        foreach($property->property_photos as $photo){
            if(!in_array($photo->image, $request->images) && File::exists(public_path() . '/photos/properties/' . $photo->image)){
                FILE::delete(public_path() . '/photos/properties/' . $photo->image);
                $propertyPhotos->where('id', $photo->id)->delete();
            }
        }

        return response()->json([
            "success" => true,
            "message" => "Property updated"
        ]);
    }

    public function myPropertyDelete($id){
        $property = PropertyDetail::with('property_photos')->findOrFail($id);

        if(count($property->property_photos) > 0){
            foreach($property->property_photos as $photo){
                if(!empty($photo->image) && File::exists(public_path() . '/photos/properties/' . $photo->image)) {
                    FILE::delete(public_path() . '/photos/properties/' . $photo->image);
                }
            }
        }

        $property->delete();

        return response()->json([
            "success" => true,
            "message" => "Deleted"
        ]);
    }
}
