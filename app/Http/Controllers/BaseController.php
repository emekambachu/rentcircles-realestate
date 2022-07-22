<?php

namespace App\Http\Controllers;

use App\Services\BaseService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function propertyStates(){
        try {
            $states = BaseService::propertyStates();
            return response()->json([
                'success' => true,
                'states' => $states,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function propertyTypes(){
        try {
            $types = BaseService::propertyTypesList();
            return response()->json([
                'success' => true,
                'property_types' => $types,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error_message' => $e->getMessage(),
            ]);
        }
    }

}
