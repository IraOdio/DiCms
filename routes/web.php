<?php

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
Route::group([],function ($router){
    Route::get('/', [\App\Http\Controllers\PublicVisibility\Web\HomeController::class,'welcome'])->name('home');

    Route::group(['prefix' => env('APP_PUBLIC_LK_PREFIX')],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\LkController::class,'showLkView'])->name('lk');
        Route::get('/logout',[\App\Http\Controllers\PublicVisibility\Web\LkController::class,'showLogoutView'])->name('logout-message');
        Route::post('/logout',[\App\Http\Controllers\PublicVisibility\Web\LkController::class,'logoutAction'])->name('logout-process');
    });
    Route::group(['prefix' => 'auth'],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\AuthController::class,'showAuthForm'])->name('auth-form');
        Route::get('/failed',[\App\Http\Controllers\PublicVisibility\Web\AuthController::class,'showAuthFailed'])->name('auth-failed');
        Route::post('/login',[\App\Http\Controllers\PublicVisibility\Web\AuthController::class,'loginAction'])->name('auth-process');
    });
    Route::group(['prefix' => 'reg'],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\RegistrationController::class,'showRegForm'])->name('registration-form');
        Route::get('/success',[\App\Http\Controllers\PublicVisibility\Web\RegistrationController::class,'showSuccessViewAction'])->name('registration-success');
        Route::post('/register',[\App\Http\Controllers\PublicVisibility\Web\RegistrationController::class,'registrationAction'])->name('registration-process');
    });

});

Route::group(['prefix' => env('APP_PRIVATE_AREA_PREFIX')],function ($router){
    Route::get('/', [\App\Http\Controllers\PrivateVisibility\Web\HomeController::class,'welcome']);
});

