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
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\Lk\LkController::class,'showLkView'])->name('lk-view');

        // region Logout
        Route::post('/logout',[\App\Http\Controllers\PublicVisibility\Web\Lk\LkController::class,'logoutAction'])->name('logout-process-action');
        // endregion

        // region Right-Role
        Route::group(['prefix' => 'right-role'],function ($router){
            Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\RightRole\RightRoleController::class,'showRightRoleView'])->name('lk-right-role-view');
            Route::get('/post',[\App\Http\Controllers\PublicVisibility\Web\RightRole\RightRoleController::class,''])->name('lk-right-role-post-view');
        });
        // endregion

        // region Chat
        Route::group(['prefix' => 'chat'], function ($router){
            Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\Chat\ChatController::class,'showChatView'])->name('lk-chat-view');
        });
        // endregion
    });
    Route::group(['prefix' => 'auth'],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\User\AuthController::class,'showAuthForm'])->name('auth-form-view');
        Route::get('/failed',[\App\Http\Controllers\PublicVisibility\Web\User\AuthController::class,'showAuthFailed'])->name('auth-failed-view');
        Route::post('/login',[\App\Http\Controllers\PublicVisibility\Web\User\AuthController::class,'loginAction'])->name('auth-process-action');
    });
    Route::group(['prefix' => 'reg'],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\User\RegistrationController::class,'showRegForm'])->name('registration-form-view');
        Route::get('/success',[\App\Http\Controllers\PublicVisibility\Web\User\RegistrationController::class,'showSuccessViewAction'])->name('registration-success-view');
        Route::post('/register',[\App\Http\Controllers\PublicVisibility\Web\User\RegistrationController::class,'registrationAction'])->name('registration-process-action');
    });

    Route::group(['prefix' => 'blog'],function (){
        Route::get('/',[\App\Http\Controllers\PublicVisibility\Web\Blog\BlogPostController::class,'showIndexBlogView'])->name('blog-master-view');
        Route::get('/create',[\App\Http\Controllers\PublicVisibility\Web\Blog\BlogPostController::class,'showCreateBlogPostView'])->name('blog-post-create-form-view');
        Route::get('/update',[\App\Http\Controllers\PublicVisibility\Web\Blog\BlogPostController::class,'showUpdateBlogPostView'])->name('blog-post-update-form-view');
        Route::post('/create',[\App\Http\Controllers\PublicVisibility\Web\Blog\BlogPostController::class,'createBlogPostAction'])->name('blog-post-create-action');
        Route::patch('/update',[\App\Http\Controllers\PublicVisibility\Web\Blog\BlogPostController::class,'updateBlogPostAction'])->name('blog-post-update-action');
        Route::delete('/delete',[\App\Http\Controllers\PublicVisibility\Web\Blog\BlogPostController::class,'deleteBlogPostAction'])->name('blog-post-delete-action');
    });


});

Route::group(['prefix' => 'adminka'],function ($router){
    Route::get('/', [\App\Http\Controllers\PrivateVisibility\Web\HomeController::class,'welcome']);
});

