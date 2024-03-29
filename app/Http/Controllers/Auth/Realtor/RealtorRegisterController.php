<?php

namespace App\Http\Controllers\Auth\Realtor;

use App\Http\Controllers\Controller;
use App\Models\Realtor\Realtor;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Jobs\RealtorVerificationEmailJob as realtorEmailJob;

class RealtorRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showRegistrationForm(){
        return view('auth.realtors.register');
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::REALTOR_LOGIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest:realtor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:realtors'],
            'mobile' => ['nullable', 'string', 'max:12', 'unique:realtors'],
            'country' => ['required', 'string'],
            'state' => ['nullable', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createRealtor(Request $request){

        //Generate email verification token
        function verificationToken($length = 11){
            $characters = '0123456789ABCDEFG';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $rules = array(
            'name' => 'required',
            'email' => 'required|unique:realtors',
            'mobile' => 'nullable|unique:realtors',
            'password' => 'required|confirmed|min:6',
            'country' => 'required',
            'state' => 'nullable',
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        $realtor = Realtor::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'password' => Hash::make($request['password']),
            'country' => $request['country'],
            'state' => $request['state'],
            'verification_token' => verificationToken(),
        ]);

        $data['email'] = $realtor->email;
        $data['name'] = $realtor->name;
        dispatch(new realtorEmailJob($data));

        return response()->json([
            'success' => true,
            'message' => 'Registration is successful'
        ]);
    }

    public function verifyEmail($token){

        $realtor = new Realtor();
        $verify = $realtor->where('verification_token', $token)->first();

        if($verify){
            $verify->verify_email = 1;
            $verify->save();
            Session::flash('success', "Email verified, please login");
        }else{
            Session::flash('warning', "Incorrect token");
        }
        return view('auth.realtors.login');
    }

    public function verifyEmailComplete(){

    }
}
