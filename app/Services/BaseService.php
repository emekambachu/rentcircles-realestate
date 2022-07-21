<?php

namespace App\Services;

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
}
