<?php

namespace App\Http\Controllers\Realtor;

use App\Http\Controllers\Controller;
use App\Models\Realtor\Realtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealtorAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth:realtor');
    }

    public function dashboard(){
        return view('realtors.index');
    }

    public function getProfile(){
        $profile = Realtor::findOrFail(Auth::user()->id);
        return response()->json([
            'success' => true,
            'profile' => $profile
        ], 200);
    }
}
