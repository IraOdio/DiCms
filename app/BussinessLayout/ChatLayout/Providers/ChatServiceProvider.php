<?php


namespace App\BussinessLayout\ChatLayout\Providers;


use App\BussinessLayout\ChatLayout\Abstracted\ChatServiceAbstract;
use App\BussinessLayout\ChatLayout\Realization\ChatService;
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
