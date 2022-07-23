<?php

namespace App\Services;

use App\Models\Properties\PropertyFeature;
use App\Models\Properties\PropertyType;
use App\Models\State;

/**
 * Class BaseService.
 */
class BaseService
{
    public static function states(){
        return new State();
    }

    public static function propertyStates(){
        return self::states()->where(function($query) {
            $query->where('name', '=', "Lagos")
                ->orWhere('name', '=', "FCT");
        })->orderBy('name')->get();
    }

    public static function countries(){

    }

    public static function propertyTypes(){
        return new PropertyType();
    }

    public static function PropertyTypesList(){
        return self::propertyTypes()->orderBy('name')->get();
    }

    public static function propertyFeatures(){
        return new PropertyFeature();
    }

    public static function propertyFeaturesList(){
        return self::PropertyFeatures()->orderBy('name')->get();
    }

}
