<?php

namespace App\Http\Controllers\Realtor;

use App\Http\Controllers\Controller;
use App\Models\Realtor\Realtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealtorAdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:realtor');
        $this->middleware('admin');
    }

    public function realtorAdminProfile(){
        $profile = Realtor::where([
            ['id', Auth::user()->id],
            ['admin', 1],
        ])->first();
        return response()->json([
            'success' => true,
            'profile' => $profile
        ], 200);
    }

}
