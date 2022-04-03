<?php

namespace App\Http\Controllers\Properties;

use App\Http\Controllers\Controller;
use App\Models\Properties\Country;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){

        return view('home.properties.index');
    }

    public function buy(){

        return view('home.properties.index');
    }

    public function searchBuy(){

    }

    public function searchRent(){

    }

    public function show($id){

        return view('home.properties.show');
    }

    public function propertyCountries(){
        $countries = Country::orderBy('country_name', 'asc')->limit(20)->get();
        return response()->json($countries, 200);
    }
}
