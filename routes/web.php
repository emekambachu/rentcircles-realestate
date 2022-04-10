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

Route::get('/{any}', static function () {
    return view('home');
    // vue route should ignore these urls and allow server to render it
    // ignore realtor/login and realtor/account from vue router, allow server to render
})->where('any', '^(?!realtor/login|realtor/account).*$');

// Properties
Route::get('/properties', [PropertyController::class, 'index'])
    ->name('realtor.verify.email');


// Realtor email verification
Route::get('/realtor/{token}/verify/email', [RealtorRegisterController::class, 'verifyEmail'])
    ->name('realtor.verify.email');
Route::get('/realtor/{token}/verify/email-complete', [RealtorRegisterController::class, 'verifyEmailComplete'])
    ->name('realtor.verify.email-complete');

// Realtor Login
// ignore this page for vue router above, so laravel server can render it
Route::get('/realtor/login', [RealtorLoginController::class, 'showLoginForm'])
    ->name('realtor.login');

// Realtors Account SPA
Route::get('/realtor/account/{any}', static function () {
    return view('realtors.index');
})->where('any', '.*');

// ignore this page from vue router above in /{any}, so laravel server can render it
Route::get('/realtor/account', [RealtorAccountController::class, 'dashboard'])
    ->name('realtor.dashboard');


// Users SPA
Route::get('/users/account/{any}', static function () {
    return view('users.index');
})->where('any', '.*');


// Realtors SPA
Route::get('/admin/account/{any}', static function () {
    return view('admin.index');
})->where('any', '.*');


// Admin Auth
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin.login');
Route::get('admin', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin');

//Github Deployment
Route::post('github/deploy', [GithubDeploymentController::class, 'deploy']);
