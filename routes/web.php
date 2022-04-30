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

// Auth
Auth::routes();

//Route::get('/{any}', static function () {
//    return view('home');
//    // vue route should ignore these urls and allow server to render it
//    // ignore realtor/login and realtor/account from vue router, allow server to render
//})->where('any', '^(?!realtor/login|realtor/account).*$');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/properties', [App\Http\Controllers\Properties\PropertyController::class, 'index'])
    ->name('properties');
Route::get('/properties/search', [App\Http\Controllers\Properties\PropertyController::class, 'search'])
    ->name('properties.search');
Route::get('/property/{id}/detail', [App\Http\Controllers\Properties\PropertyController::class, 'detail'])
    ->name('property.detail');

Route::get('/locations', [App\Http\Controllers\HomeController::class, 'locations'])->name('locations');

Route::get('/about', static function () {
    return view('home.about');
});

Route::get('/terms', static function () {
    return view('home.terms');
});

Route::get('/privacy', static function () {
    return view('home.privacy-policy');
});

Route::get('/faq', static function () {
    return view('home.faq');
});

Route::get('/contact', static function () {
    return view('home.contact');
});


// Realtor Auth
Route::get('/realtor/login', [RealtorLoginController::class, 'showLoginForm'])
    ->name('realtor.login');
Route::get('/realtor/register', [RealtorRegisterController::class, 'showRegistrationForm'])
    ->name('realtor.register');

// Realtor email verification
Route::get('/realtor/{token}/verify/email', [RealtorRegisterController::class, 'verifyEmail'])
    ->name('realtor.verify.email');
Route::get('/realtor/{token}/verify/email-complete', [RealtorRegisterController::class, 'verifyEmailComplete'])
    ->name('realtor.verify.email-complete');

// Realtors Account SPA
Route::get('/realtor/{any}', static function () {
    return view('realtors.index');
})->where('any', '.*');


// Users SPA
Route::get('/user/{any}', static function () {
    return view('users.index');
})->where('any', '.*');


// Admin SPA
Route::get('/admin/{any}', static function () {
    return view('admin.index');
})->where('any', '.*');


// Admin Auth
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin.login');
Route::get('/admin', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin');

//Github Deployment
Route::post('/github/deploy', [GithubDeploymentController::class, 'deploy']);
