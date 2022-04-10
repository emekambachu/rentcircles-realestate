<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Auth\Admin\AdminLoginController;
use App\Http\Controllers\Auth\Admin\AdminRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Realtor\RealtorLoginController;
use App\Http\Controllers\Auth\Realtor\RealtorRegisterController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Properties\PropertyController;
use App\Http\Controllers\Realtor\RealtorAccountController;
use App\Http\Controllers\User\UserAccountController;
use App\Models\Properties\Country;
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

    Route::get('/authenticated', static function () {
        return true;
    });

    // Realtor Account
    Route::get('/realtor/authenticate', static function (Request $request) {
        return $request->user('realtor');
    });
    Route::get('/realtor/account', [RealtorAccountController::class, 'getProfile']);
    Route::post('/realtor/property/submit', [RealtorAccountController::class, 'submitProperty']);
    Route::get('/realtor/properties', [RealtorAccountController::class, 'myProperties']);
    Route::get('/realtor/property/{id}/edit', [RealtorAccountController::class, 'myPropertyEdit']);
    Route::post('/realtor/property/{id}/update', [RealtorAccountController::class, 'myPropertyUpdate']);
    Route::delete('/realtor/properties/{id}/delete', [RealtorAccountController::class, 'myPropertyDelete']);

    // User Account
    Route::get('/user/authenticate', static function (Request $request) {
        return $request->user('web');
    });
    Route::get('/user/account', [UserAccountController::class, 'getProfile']);

    // Admin Account
    Route::get('/admin/authenticate', static function (Request $request) {
        return $request->user('admin');
    });
    Route::get('/admin/account', [AdminAccountController::class, 'getProfile']);

});

// Properties
Route::get('states', [PropertyController::class, 'getStates']);
Route::get('property/types', [PropertyController::class, 'getPropertyTypes']);

// Realtor Register/Login
Route::post('realtor/register/submit', [RealtorRegisterController::class, 'createRealtor']);
Route::get('property/countries', [PropertyController::class, 'propertyCountries']);
Route::post('realtor/login/submit', [RealtorLoginController::class, 'login']);
Route::get('/realtor/account/logout', [RealtorLoginController::class, 'logout']);

// User Register/Login
Route::post('register', [RegisterController::class, 'register']);
Route::get('property/countries', [PropertyController::class, 'propertyCountries']);
Route::post('login', [LoginController::class, 'login']);

// Admin Register/Login
Route::post('admin/register', [AdminRegisterController::class, 'register']);
Route::post('login', [AdminLoginController::class, 'login']);
