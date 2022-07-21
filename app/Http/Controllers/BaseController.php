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

}
