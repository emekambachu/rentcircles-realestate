<?php

namespace App\Http\Controllers\Realtor;

use App\Http\Controllers\Controller;
use App\Models\Properties\PropertyDetail;
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
            'living_rooms' => 'required|numeric',
            'cost' => 'required|numeric',
            'features' => 'nullable',
            'image1' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
            'image2' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
            'image3' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5048',
            'image4' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5048',
            'image5' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5048',
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        if($request->hasFile('image1') && $file = $request->file('image1')){
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            // create canvas background to hold the image (Must install Image Intervention Package first)
            // $background = InterventionImage::canvas(500, 270);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(700, 700, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
//            $background->insert($convert_image, 'center');
            $convert_image->save($converted_path . '/' . $name);
            $input['image1'] = $name;
        }

        if($request->hasFile('image2') && $file = $request->file('image2')){
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(500, 500, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image2']) ? $input['image2'] = $name : $input['image2'] = null;
        }

        if($request->hasFile('image3') && $file = $request->file('image3')){
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(500, 500, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image3']) ? $input['image3'] = $name : $input['image3'] = null;
        }

        if($request->hasFile('image4') && $file = $request->file('image4')){
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(500, 500, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image4']) ? $input['image4'] = $name : $input['image4'] = null;
        }

        if($request->hasFile('image5') && $file = $request->file('image5')){
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(500, 500, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image5']) ? $input['image5'] = $name : $input['image5'] = null;
        }

        $input['realtor_id'] = Auth::user()->id;
        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;

        PropertyDetail::create($input);

        return response()->json([
            "success" => true,
            "message" => "Property submitted successfully, will be published once approved"
        ]);
    }

    public function myProperties(){
        $properties = PropertyDetail::with('state', 'property_type', 'property_reviews')
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
        $property = PropertyDetail::with('property_type', 'state')->findOrFail($id);
        return response()->json([
            "success" => true,
            "property" => $property
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
            'living_rooms' => 'required|numeric',
            'cost' => 'required|numeric',
            'features' => 'nullable',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        if($request->hasFile('image1') && $file = $request->file('image1')){
            Session::put('image1', $property->image1);
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            // create canvas background to hold the image (Must install Image Intervention Package first)
            // $background = InterventionImage::canvas(500, 270);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(850, 650, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
//            $background->insert($convert_image, 'center');
            $convert_image->save($converted_path . '/' . $name);
            $input['image1'] = $name;
        }else{
            $input['image1'] = $property->image1;
        }

        if($request->hasFile('image2') && $file = $request->file('image2')){
            Session::put('image2', $property->image2);
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(850, 650, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image2']) ? $input['image2'] = $name : $input['image2'] = null;
        }else{
            $input['image2'] = $property->image2;
        }

        if($request->hasFile('image3') && $file = $request->file('image3')){
            Session::put('image3', $property->image3);
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(850, 650, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image3']) ? $input['image3'] = $name : $input['image3'] = null;
        }else{
            $input['image3'] = $property->image3;
        }

        if($request->hasFile('image4') && $file = $request->file('image4')){
            Session::put('image4', $property->image4);
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(850, 650, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image4']) ? $input['image4'] = $name : $input['image4'] = null;
        }else{
            $input['image4'] = $property->image4;
        }

        if($request->hasFile('image5') && $file = $request->file('image5')){
            Session::put('image5', $property->image5);
            $converted_path = 'photos/properties/';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            $convert_image = InterventionImage::make($file->path());
            $convert_image->resize(850, 650, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $convert_image->save($converted_path . '/' . $name);
            !empty($input['image5']) ? $input['image5'] = $name : $input['image5'] = null;
        }else{
            $input['image5'] = $property->image5;
        }

        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;
        $property->update($input);

        // After update, check if session file is the current file, else delete
        if(Session::get('image1') !== $property->image1 && File::exists(public_path() . '/photos/properties/' . Session::get('image1'))) {
            FILE::delete(public_path() . '/photos/properties/' . Session::get('image1'));
            Session::forget('image1');
        }

        if(Session::get('image2') !== $property->image2 && File::exists(public_path() . '/photos/properties/' . Session::get('image2'))) {
            FILE::delete(public_path() . '/photos/properties/' . Session::get('image2'));
            Session::forget('image2');
        }

        if(Session::get('image3') !== $property->image3 && File::exists(public_path() . '/photos/properties/' . Session::get('image3'))) {
            FILE::delete(public_path() . '/photos/properties/' . Session::get('image3'));
            Session::forget('image3');
        }

        if(Session::get('image4') !== $property->image4 && File::exists(public_path() . '/photos/properties/' . Session::get('image4'))) {
            FILE::delete(public_path() . '/photos/properties/' . Session::get('image4'));
            Session::forget('image4');
        }

        if(Session::get('image5') !== $property->image5 && File::exists(public_path() . '/photos/properties/' . Session::get('image5'))) {
            FILE::delete(public_path() . '/photos/properties/' . Session::get('image5'));
            Session::forget('image5');
        }

        return response()->json([
            "success" => true,
            "message" => "Property updated"
        ]);
    }

    public function myPropertyDelete($id){
        $property = PropertyDetail::findOrFail($id);
        if(!empty($property->image1) && File::exists(public_path() . '/photos/properties/' . $property->image1)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image1);
        }
        if(!empty($property->image2) && File::exists(public_path() . '/photos/properties/' . $property->image2)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image2);
        }
        if(!empty($property->image3) && File::exists(public_path() . '/photos/properties/' . $property->image3)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image3);
        }
        if(!empty($property->image4) && File::exists(public_path() . '/photos/properties/' . $property->image4)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image4);
        }
        if(!empty($property->image5) && File::exists(public_path() . '/photos/properties/' . $property->image5)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image5);
        }
        $property->delete();

        return response()->json([
            "success" => true,
            "message" => "Deleted"
        ]);
    }
}
