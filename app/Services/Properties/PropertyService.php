<?php

namespace App\Services\Properties;

use App\Models\Properties\Property;
use App\Models\Properties\PropertyContactMessage;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyPhoto;
use App\Models\Properties\PropertyType;
use App\Models\State;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

/**
 * Class PropertyService.
 */
class PropertyService extends BaseService
{
    public static function property(){
        return new Property();
    }

    public static function propertyWithRelationships(){
        return self::property()->with('realtor', 'state', 'property_type', 'property_photos');
    }

    public static function propertyApproved(){
        return self::property()->with('realtor', 'state', 'property_type', 'property_photos')
            ->where('status', 1);
    }

    public static function propertyPhoto(){
        return new PropertyPhoto();
    }

    public static function propertyPhotoWithRelationships(){
        return self::propertyPhoto()->with('property');
    }

    public static function propertyType(){
        return new PropertyType();
    }

    public static function PropertyTypeName($id){
        return self::propertyType()->findOrFail($id)->name;
    }

    public static function propertyContactMessage(){
        return new PropertyContactMessage();
    }

    public static function propertyContactMessageWithRelations(){
        return PropertyContactMessage::with('realtor', 'property');
    }

    public static function contactRealtorWithPropertyId($request, $id){

        $input = $request->all();
        self::propertyContactMessage()->create([
            'property_id' => $id,
            'realtor_id' => $input['realtor_id'],
            'name' => $input['name'],
            'email' => $input['email'],
            'message' => $input['message'],
        ]);
    }

    public static function searchProperties($request){

        $input = $request->all();

        // delete search_inputs session and create a new one with an array
        Session::forget('search_inputs');
        Session::put('search_inputs', []);

        // add field names to session arrays for search result summary
        if(!empty($input['term'])){
            Session::push('search_inputs', ['term' => $input['term']]);
        }
        if(!empty($input['property_type_id'])){
            Session::push('search_inputs', ['property_type_id' => self::propertyTypeName($input['property_type_id'])]);
        }
        if(!empty($input['state_id'])){
            Session::push('search_inputs', ['state_id' => self::stateNameById($input['state_id'])]);
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

        $result = self::PropertyApproved()
            ->select('properties.*', 'property_types.name AS property_type_name', 'states.name AS state_name')
            ->leftjoin('property_types', 'property_types.id', '=', 'properties.property_type_id')
            ->leftjoin('states', 'states.id', '=', 'properties.state_id')
            ->where('properties.service', $input['service'])
            ->where(function($query) use ($input){
                // The rest of the queries can come here
                $query->when(!empty($input['term']), static function($q) use($input){
                    $q->where('properties.title', 'like' , '%'. $input['term'] .'%')
                        ->orWhere('properties.address', 'like' , '%'. $input['term'] .'%')
                        ->orWhere('properties.features', 'like' , '%'. $input['term'] .'%')
                        ->orWhere('properties.service', 'like' , '%'. $input['term'] .'%')
                        ->orWhere('property_types.name', 'like' , '%'. $input['term'] .'%')
                        ->orWhere('states.name', 'like' , '%'. $input['term'] .'%');

                })->when(!empty($input['property_type_id']), static function ($term) use($input){
                    return $term->where('properties.property_type_id', $input['property_type_id']);

                })->when(!empty($input['state_id']), static function ($term) use($input){
                    return $term->where('properties.state_id', $input['state_id']);

                })->when(!empty($input['bedrooms']), static function ($term) use($input){
                    return $term->where('properties.bedrooms', $input['bedrooms']);

                })->when(!empty($input['bathrooms']), static function ($term) use($input){
                    return $term->where('properties.bathrooms', $input['bathrooms']);

                })->when(!empty($input['living_rooms']), static function ($term) use($input){
                    return $term->where('properties.living_rooms', $input['living_rooms']);

                })->when(!empty($input['min_cost']), static function ($term) use($input){
                    return $term->where('properties.cost', '>=' , $input['min_cost']);

                })->when(!empty($input['max_cost']), static function ($term) use($input){
                    return $term->where('properties.cost', '<=' , $input['max_cost']);
                });

            })->paginate(15);

        return $result;
    }


}
