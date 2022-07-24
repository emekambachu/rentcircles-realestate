<?php

namespace App\Http\Controllers\Realtor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Realtor\SubmitPropertyRequest;
use App\Http\Requests\Realtor\UpdatePropertyRequest;
use App\Services\Properties\PropertyService;
use App\Services\Realtor\RealtorPropertyService;
use Illuminate\Support\Facades\Auth;

class RealtorPropertyController extends Controller
{
    public function __construct(){
        $this->middleware('auth:realtor');
    }

    public function index(){

    }

    public function propertyStats(){

        try {
            $properties = PropertyService::propertyWithRelationships();
            $recentProperties = $properties->where('realtor_id', Auth::user()->id)
                ->latest()->limit(10)->get();

            return response()->json([
                'success' => true,
                'recent_properties' => $recentProperties,
                'total_properties' => $properties->count(),
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function myProperties(){
        try {
            $properties = PropertyService::propertyWithRelationships()
                ->orderBy('created_at', 'desc')->paginate(15);

            return response()->json([
                'success' => true,
                'properties' => $properties,
                'total' => $properties->total()
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function submitProperty(SubmitPropertyRequest $request){

        try {
            RealtorPropertyService::submitProperty($request);
            return response()->json([
                "success" => true,
                "message" => "Property submitted successfully, will be published once approved"
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function myPropertyEdit($id){
        try {
            return RealtorPropertyService::getAndEditProperty($id);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error_message' => $e->getMessage(),
            ]);
        }
    }

    public function deletePropertyPhoto($image){

        try {
            RealtorPropertyService::deletePropertyPhoto($image);
            return response()->json([
                "success" => true,
                "message" => "Deleted"
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error_message' => $e->getMessage(),
            ]);
        }
    }

    public function myPropertyUpdate(UpdatePropertyRequest $request, $id){

        try {
            RealtorPropertyService::updateProperty($request, $id);
            return response()->json([
                "success" => true,
                "message" => "Property updated successfully"
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function approveProperty($id){
        try {
            $property = RealtorPropertyService::approveProperty($id);
            return response()->json([
                "success" => true,
                "status" => $property->status
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function myPropertyDelete($id){

        try {
            RealtorPropertyService::deleteProperty($id);
            return response()->json([
                "success" => true,
                "message" => "Deleted"
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
