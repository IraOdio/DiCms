<?php


namespace App\BaseLayer\Providers;


use App\BaseLayer\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\BaseLayer\DebugBarManager\Realization\DebugBarManager;
use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BaseLayer\Logger\Realization\DefaultLogger;
use App\BaseLayer\UIManager\Abstracted\UIManagerAbstracted;
use App\BaseLayer\UIManager\Realization\UIManager;
use Illuminate\Support\ServiceProvider;

class BaseLayerServiceProvider extends ServiceProvider
{
    public $bindings = [
        DebugBarManagerAbstracted::class => DebugBarManager::class,
        LoggerAbstract::class => DefaultLogger::class,
        UIManagerAbstracted::class => UIManager::class,
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
