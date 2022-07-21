<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Auth\Admin\AdminLoginController;
use App\Http\Controllers\Auth\Admin\AdminRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Realtor\RealtorLoginController;
use App\Http\Controllers\Auth\Realtor\RealtorRegisterController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Properties\PropertyController;
use App\Http\Controllers\Realtor\RealtorAccountController;
use App\Http\Controllers\Realtor\RealtorAdminController;
use App\Http\Controllers\Realtor\RealtorPropertyController;
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
    Route::post('/realtor/profile/update', [RealtorAccountController::class, 'updateProfile']);

    Route::get('/realtor/properties/stats', [RealtorPropertyController::class, 'propertyStats']);
    Route::post('/realtor/property/submit', [RealtorPropertyController::class, 'submitProperty']);
    Route::get('/realtor/properties', [RealtorPropertyController::class, 'myProperties']);
    Route::get('/realtor/properties/search', [RealtorPropertyController::class, 'search']);
    Route::get('/realtor/property/{id}/edit', [RealtorPropertyController::class, 'myPropertyEdit']);
    Route::post('/realtor/property/{id}/update', [RealtorPropertyController::class, 'myPropertyUpdate']);
    Route::post('/realtor/property/{id}/approve', [RealtorPropertyController::class, 'approveProperty']);
    Route::delete('/realtor/property/{id}/delete', [RealtorPropertyController::class, 'myPropertyDelete']);

    Route::get('/realtor/logout', [RealtorLoginController::class, 'logout']);

    // User Account
    Route::get('/user/authenticate', static function (Request $request) {
        return $request->user('web');
    });
    Route::get('/user/account', [UserAccountController::class, 'getProfile']);

});

// States
Route::get('/states', [BaseController::class, 'propertyStates']);
Route::get('/countries', [BaseController::class, 'propertyCountries']);

// Home
Route::get('/home/properties', [HomeController::class, 'homeProperties']);

// Properties
Route::get('/properties', [PropertyController::class, 'index']);
Route::get('/property/types', [PropertyController::class, 'getPropertyTypes']);

// Realtor Register/Login
Route::post('/realtor/register/submit', [RealtorRegisterController::class, 'createRealtor']);
Route::post('/realtor/login/submit', [RealtorLoginController::class, 'login']);
Route::get('/realtor/account/logout', [RealtorLoginController::class, 'logout']);

// User Register/Login
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

// Admin Register/Login
Route::post('/admin/login', [AdminLoginController::class, 'login']);
