<?php

namespace App\Services\Realtor;

use Illuminate\Support\Facades\Auth;

/**
 * Class RealtorLoginService.
 */
class RealtorLoginService {

    public static function login($request){

        if(Auth::guard('realtor')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ],

            $request->get('remember'))) {
            return response()->json([
                'success' => true,
            ], 200);
        }

        return response()->json([
            'success' => false,
            "message" => "Incorrect login details"
        ], 404);
    }

    public static function logout(){
        Auth::guard('realtor')->logout();
        return response()->json([
            'success' => true,
        ], 200);
    }

}
