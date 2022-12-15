<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group([],function ($router){
    Route::group(['prefix' => 'example','namespace' => 'App\\Http\\Controllers\\PublicVisibility\Api\\'], function ($router){
        Route::get('/','ExampleController@exampleAction');
        Route::get('/resources/','ExampleController@exampleGetResources');
        Route::get('/resources/{id}','ExampleController@exampleGetResourcesFromId');
        Route::post('/resources','ExampleController@examplePostResources');
        Route::put('/resources/{id}','ExampleController@examplePutResources');
        Route::delete('/resources/{id}','ExampleController@exampleDeleteResources');
    });

});
