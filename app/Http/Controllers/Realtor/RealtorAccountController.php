<?php

namespace App\Http\Controllers\Realtor;

use App\Http\Controllers\Controller;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use App\Models\Realtor\Realtor;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function myPropertyUpdate($id){

    }

    public function myPropertyDelete($id){

    }
}
