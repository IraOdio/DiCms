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
    Route::get('/', [\App\Http\Controllers\PublicVisibility\Web\HomeController::class,'welcome'])->name('home-view');

    Route::group(['prefix' => 'lk'],function (){
        // Главная личного кабинета
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\LkController::class,'showLkView'])->name('lk-view');

        // region Logout
        Route::get('/logout',[\App\Http\Controllers\PublicVisibility\Web\LkController::class,'showLogoutView'])->name('logout-message-view');
        Route::post('/logout',[\App\Http\Controllers\PublicVisibility\Web\LkController::class,'logoutAction'])->name('logout-process-action');
        // endregion

        // region Right-Role
        Route::group(['prefix' => 'right-role'],function ($router){
            Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\RightRoleController::class,'showRightRoleView'])->name('lk-right-role-view');
            Route::get('/post',[\App\Http\Controllers\PublicVisibility\Web\RightRoleController::class,''])->name('lk-right-role-post-view');
        });

        // endregion
    });
    Route::group(['prefix' => 'auth'],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\AuthController::class,'showAuthForm'])->name('auth-form-view');
        Route::get('/failed',[\App\Http\Controllers\PublicVisibility\Web\AuthController::class,'showAuthFailed'])->name('auth-failed-view');
        Route::post('/login',[\App\Http\Controllers\PublicVisibility\Web\AuthController::class,'loginAction'])->name('auth-process-action');
    });
    Route::group(['prefix' => 'reg'],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\RegistrationController::class,'showRegForm'])->name('registration-form-view');
        Route::get('/success',[\App\Http\Controllers\PublicVisibility\Web\RegistrationController::class,'showSuccessViewAction'])->name('registration-success-view');
        Route::post('/register',[\App\Http\Controllers\PublicVisibility\Web\RegistrationController::class,'registrationAction'])->name('registration-process-action');
    });

});

Route::group(['prefix' => 'adminka'],function ($router){
    Route::get('/', [\App\Http\Controllers\PrivateVisibility\Web\HomeController::class,'welcome']);
});

