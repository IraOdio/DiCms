<?php


namespace App\BusinessLayer\User\Providers;


use App\BusinessLayer\User\Abstracted\UserManagerAbstracted;
use App\BusinessLayer\User\Interfaces\UserManagerInterface;
use App\BusinessLayer\User\Realization\UserManager;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public $bindings = [
        UserManagerInterface::class => UserManager::class
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
