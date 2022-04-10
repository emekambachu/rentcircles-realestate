<?php

namespace App\Http\Controllers\Properties;

use App\Http\Controllers\Controller;
use App\Models\Properties\PropertyType;
use App\Models\State;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){

        return view('home.properties.index');
    }

    public function show($id){

        return view('home.properties.show');
    }

    public function getPropertyTypes(){
        $types = PropertyType::orderBy('name')->get();
        return response()->json([
            'success' => true,
            'property_types' => $types
        ], 200);
    }

    public function getStates(){
        $states = State::orderBy('name')->get();
        return response()->json([
            'success' => true,
            'states' => $states
        ], 200);
    }
}
