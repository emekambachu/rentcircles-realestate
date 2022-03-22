<?php

use App\Http\Controllers\Auth\Realtor\RealtorRegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Sanctum middleware group
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/realtor/register/submit', static function (Request $request) {
        return $request->user();
    });

//    Route::get('/authenticated', static function () {
//        return true;
//    });

});

// Realtor Register
Route::post('realtor/register/submit', [RealtorRegisterController::class, 'createRealtor'])
    ->name('realtor.register.submit');
