<?php

namespace App\Http\Controllers;

use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){

        $data['properties'] = PropertyDetail::with('state', 'property_type', 'realtor')
            ->latest()->limit(3)->get();
        $data['states'] = State::orderBy('name')->get();
        $data['property_types'] = PropertyType::orderBy('name')->get();

        return view('home.index', $data);
    }

    public function locations(){

        return view('home.properties.locations');
    }

}
