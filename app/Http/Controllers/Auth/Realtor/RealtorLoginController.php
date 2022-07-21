<?php

namespace App\Http\Controllers\Auth\Realtor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Realtor\RealtorLoginRequest;
use App\Providers\RouteServiceProvider;
use App\Services\Realtor\RealtorLoginService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RealtorLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
//    public function __construct()
//    {
//        $this->middleware('guest:realtor')->except('logout');
//    }

    public function showLoginForm(){
        return view('auth.realtors.login', ['url' => 'realtor/login']);
    }

    public function login(RealtorLoginRequest $request){

        try {
            return RealtorLoginService::login($request);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    //add for logout function to work
    use AuthenticatesUsers {
        logout as performLogout;
    }

    //perform logout
    public function logout(){
        try {
            return RealtorLoginService::logout();
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
