<?php

namespace App\Http\Controllers\Properties;

use App\Http\Controllers\Controller;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PropertyController extends Controller
{
    public function index(){

        $data['properties'] = PropertyDetail::with('state', 'property_type', 'property_photos')
            ->latest()->paginate(12);
        $data['states'] = State::orderBy('name')->get();
        $data['property_types'] = PropertyType::orderBy('name')->get();

        return view('home.properties.index', $data);
    }

    public function search(Request $request){

        $data['states'] = State::orderBy('name')->get();
        $data['property_types'] = PropertyType::orderBy('name')->get();

        $input = $request->all();
        // check all input fields for empty fields
        // if only one field has value, it can only be csrf token
        // Then trigger empty fields warning
        $hasInput = 0;
        foreach($input as $value){
            if(!empty($value)){
                $hasInput++;
            }
        }
        if($hasInput === 1){
            Session::flash('warning', 'search fields are empty');
            return redirect()->back();
        }

        // forget these sessions
        $session_arrays = ['search_inputs', 'no-results'];
        foreach($session_arrays as $session){
           if(Session::has($session)){
               Session::forget($session);
           }
        }

        Session::put('search_inputs', []);

        // add field names to session arrays for search result summary
        if(!empty($input['term'])) {
            Session::push('search_inputs', ['term' => $input['term']]);
        }
        if(!empty($input['property_type_id'])){
            Session::push('search_inputs', ['property_type_id' => $input['property_type_id']]);
        }
        if(!empty($input['state_id'])){
            Session::push('search_inputs', ['state_id' => $input['state_id']]);
        }
        if(!empty($input['bedrooms'])){
            Session::push('search_inputs', ['bedrooms' => $input['bedrooms']]);
        }
        if(!empty($input['living_rooms'])){
            Session::push('search_inputs', ['living_rooms' => $input['living_rooms']]);
        }
        if(!empty($input['max_cost'])){
            Session::push('search_inputs', ['max_cost' => $input['max_cost']]);
        }
        if(!empty($input['min_cost'])){
            Session::push('search_inputs', ['min_cost' => $input['min_cost']]);
        }

        // search query through the yaedpUser relationship of learningAssessment
        $data['properties'] = PropertyDetail::with('state', 'property_type', 'realtor', 'property_photos')
            ->wherehas('property_type', function ($query) use ($input){
                $query->when(!empty($input['term']), static function($type) use($input){
                    $type->where('name', 'like' , '%'. $input['term'] .'%');
                });
            })->wherehas('state', function ($query) use ($input){
                $query->when(!empty($input['term']), static function($state) use($input){
                    $state->where('name', 'like' , '%'. $input['term'] .'%');
                });

            })->where(static function($query) use ($input){
                $query->when(!empty($input['term']), static function($term) use($input){
                    return $term->where('title', 'like' , '%'. $input['term'] .'%');

                })->when(!empty($input['property_type_id']), static function ($term) use($input){
                    return $term->where('property_type_id', $input['property_type_id']);

                })->when(!empty($input['state_id']), static function ($term) use($input){
                    return $term->where('state_id', $input['state_id']);

                })->when(!empty($input['bedrooms']), static function ($term) use($input){
                    return $term->where('bedrooms', $input['bedrooms']);

                })->when(!empty($input['bathrooms']), static function ($term) use($input){
                    return $term->where('bathrooms', $input['bathrooms']);

                })->when(!empty($input['living_rooms']), static function ($term) use($input){
                    return $term->where('living_rooms', $input['living_rooms']);

                })->when(!empty($input['min_cost']), static function ($term) use($input){
                    return $term->where('cost', '>=' , $input['min_cost']);

                })->when(!empty($input['max_cost']), static function ($term) use($input){
                    return $term->where('cost', '<=' , $input['max_cost']);
                });
            })->paginate(15);

            // get total results
            if($data['properties']->total() > 0){
                $data['countResults'] = $data['properties']->total();
            }else{
                $data['countResults'] = 0;
            }
            if($data['properties']->first()){
                return view('home.properties.index', $data);
            }
            Session::put('no-results', 'No result');
            return view('home.properties.index', $data);
    }

    public function detail($id){

        $data['property'] = PropertyDetail::with('state', 'property_type', 'realtor', 'property_photos')
            ->findOrFail($id);
        $data['states'] = State::orderBy('name')->get();
        $data['property_types'] = PropertyType::orderBy('name')->get();

        return view('home.properties.show', $data);
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
