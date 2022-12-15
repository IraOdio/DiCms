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
    Route::get('/', [\App\Http\Controllers\PublicVisibility\Web\HomeController::class,'welcome']);
});

Route::group(['prefix' => 'pv'],function ($router){
    Route::get('/', [\App\Http\Controllers\PrivateVisibility\Web\HomeController::class,'welcome']);
});

