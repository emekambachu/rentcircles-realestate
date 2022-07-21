<?php

namespace App\Services\Realtor;

use App\Models\Realtor\Realtor;

/**
 * Class RealtorAccountService.
 */
class RealtorAccountService{

    public static function realtor(){
        return new Realtor();
    }

}
