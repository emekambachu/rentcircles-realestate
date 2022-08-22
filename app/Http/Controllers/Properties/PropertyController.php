<?php

namespace App\Http\Controllers\Properties;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use App\Models\State;
use App\Services\Properties\PropertyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PropertyController extends Controller
{
    public function index(){
        try {
            Session::forget('search_inputs'); // clear all search sessions
            $properties = PropertyService::propertyApproved()
                ->orderBy('created_at', 'desc')->paginate(15);

            return view('home.properties.index', compact('properties'));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getProperties(){
        try {
            $properties = PropertyService::propertyApproved()
                ->orderBy('created_at', 'desc')->paginate(15);

            return response()->json([
                'success' => true,
                'properties' => PropertyResource::collection($properties)
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function search(Request $request){

        try {
            $data['properties'] = PropertyService::searchProperties($request);
            $data['total'] = $data['properties']->total();
            return view('home.properties.index', $data);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function detail($id){
        $data['property'] = PropertyService::propertyWithRelationships()->findOrFail($id);
        return view('home.properties.show', $data);
    }

    public function contactRealtor(Request $request, $id){
        try {
            PropertyService::contactRealtorWithPropertyId($request, $id);
            return response()->json([
                'success' => true
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

}
