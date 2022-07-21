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

    public function updateProfile(Request $request){

        $realtor = Realtor::findOrFail(Auth::user()->id);

        $input = $request->all();
        $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:realtors,email,'.Auth::user()->id,
            'mobile' => 'nullable',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif|max:5048',
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        if($file = $request->file('image')){
            $path = 'photos/users/';
            if(!File::exists($path)){
                File::makeDirectory($path, $mode = 0777, true, true);
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
            // $background->insert($convert_image, 'center');
            $convert_image->save($path . '/' . $name);
            $input['image'] = $name;
        }else{
            $input['image'] = $realtor->image;
        }

        $realtor->update($input);

        return response()->json([
            "success" => true,
            "message" => "Profile updated"
        ]);
    }

}
