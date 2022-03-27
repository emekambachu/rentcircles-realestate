<?php

use App\Http\Controllers\Auth\Admin\AdminLoginController;
use App\Http\Controllers\Auth\Realtor\RealtorLoginController;
use App\Http\Controllers\Auth\Realtor\RealtorRegisterController;
use App\Http\Controllers\GithubDeploymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Properties\PropertyController;
use App\Http\Controllers\Realtor\RealtorAccountController;
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

// Realtor Login/Logout
Route::get('realtor/login', [RealtorLoginController::class, 'showLoginForm'])
    ->name('realtor.login');
Route::get('realtor', [RealtorLoginController::class, 'showLoginForm'])
    ->name('realtor');
Route::post('realtor/login/submit', [RealtorLoginController::class, 'login'])
    ->name('realtor.login.submit');
Route::post('realtor/logout', [RealtorLoginController::class, 'logout'])
    ->name('realtor.logout');

// Realtor Register
Route::get('realtor/register', [RealtorRegisterController::class, 'showRegistrationForm'])
    ->name('realtor.register');
Route::post('realtor/register/submit', [RealtorRegisterController::class, 'createRealtor'])
    ->name('realtor.register.submit');
Route::get('realtor/{token}/verify/email', [RealtorRegisterController::class, 'verifyEmail'])
    ->name('realtor.verify.email');
Route::get('realtor/{token}/verify/email-complete', [RealtorRegisterController::class, 'verifyEmailComplete'])
    ->name('realtor.verify.email-complete');

// Realtor Account
Route::get('realtor/account', [RealtorAccountController::class, 'dashboard'])
    ->name('realtor.account');


Route::get('email-test', static function(){
    $data['email'] = 'your_email@gmail.com';
    $data['name'] = 'Dex';
    dispatch(new App\Jobs\RealtorVerificationEmailJob($data));
    dd('done');
});

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

// Realtors SPA
Route::get('/realtor/account/{any}', static function () {
    return view('realtors.index');
})->where('any', '.*');

// Users SPA
Route::get('/users/account/{any}', static function () {
    return view('users.index');
})->where('any', '.*');

// Realtors SPA
Route::get('/admin/account/{any}', static function () {
    return view('admin.index');
})->where('any', '.*');

//Github Deployment
Route::post('github/deploy', [GithubDeploymentController::class, 'deploy']);
