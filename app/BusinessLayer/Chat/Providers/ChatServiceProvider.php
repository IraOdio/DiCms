<?php


namespace App\BusinessLayer\Chat\Providers;


use App\BusinessLayer\Chat\Abstracted\ChatServiceAbstract;
use App\BusinessLayer\Chat\Realization\ChatService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    public $bindings = [
        ChatServiceAbstract::class => ChatService::class
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
