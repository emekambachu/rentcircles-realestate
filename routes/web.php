<?php

use App\Http\Controllers\Auth\Admin\AdminLoginController;
use App\Http\Controllers\Auth\Realtor\RealtorLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Properties\PropertyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('about', static function () {
    return view('home.about');
});

Route::get('terms', static function () {
    return view('home.terms');
});

Route::get('faq', static function () {
    return view('home.faq');
});

Route::get('privacy-policy', static function () {
    return view('home.privacy-policy');
});

Route::get('contact', static function () {
    return view('home.contact');
});

// Auth
Auth::routes();

// Admin Auth
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin.login');
Route::get('admin', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin');
Route::post('admin/login/submit', [AdminLoginController::class, 'login'])
    ->name('admin.login.submit');
Route::post('admin/logout', [AdminLoginController::class, 'logout'])
    ->name('admin.logout');

// Realtor Auth
Route::get('realtor/login', [RealtorLoginController::class, 'showLoginForm'])
    ->name('realtor.login');
Route::get('realtor', [RealtorLoginController::class, 'showLoginForm'])
    ->name('realtor');
Route::post('realtor/login/submit', [RealtorLoginController::class, 'login'])
    ->name('realtor.login.submit');
Route::post('realtor/logout', [RealtorLoginController::class, 'logout'])
    ->name('realtor.logout');

// Home properties
Route::get('properties', [PropertyController::class, 'index'])
    ->name('properties');
Route::get('properties/rent', [PropertyController::class, 'rent'])
    ->name('properties.rent');
Route::get('properties/rent/search', [PropertyController::class, 'searchRent'])
    ->name('properties.rent.search');
Route::get('properties/buy', [PropertyController::class, 'buy'])
    ->name('properties.buy');
Route::get('properties/buy/search', [PropertyController::class, 'searchBuy'])
    ->name('properties.buy.search');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

