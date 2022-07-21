<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertyResource;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use App\Models\State;
use App\Services\Properties\PropertyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return string
     */

    public function index(){
        try {
            $properties = PropertyService::propertyWithRelationships()->limit(3)->get();
            return view('home.index', compact('properties'));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function locations(){
        return view('home.properties.locations');
    }

    public function homeProperties(){
        try {
            $properties = PropertyService::propertyWithRelationships()->limit(3)->get();
            return response()->json([
                'success' => true,
                'properties' => PropertyResource::collection($properties),
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

}
