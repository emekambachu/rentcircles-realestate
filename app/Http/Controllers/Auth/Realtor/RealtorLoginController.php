<?php

namespace App\Http\Controllers\Auth\Realtor;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:realtor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.realtors.login', ['url' => 'realtor/login']);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('realtor')->attempt([
            'email' => $request->email,
            'password' => $request->password],
            $request->get('remember'))) {

            return redirect()->intended('/realtor/dashboard');
        }
        Session::flash('warning', 'Incorrect Login Details');
        return back()->withInput($request->only('email', 'remember'));
    }

    //add for logout function to work
    use AuthenticatesUsers {
        logout as performLogout;
    }

    //perform logout
    public function logout(){
        Auth::guard('realtor')->logout();
        return redirect()->route('realtor.login');
    }
}
