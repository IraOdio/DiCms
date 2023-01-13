<?php


namespace App\CoreLayout\Providers;


use App\CoreLayout\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\CoreLayout\DebugBarManager\Realization\DebugBarManager;
use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\CoreLayout\Logger\Realization\DefaultLogger;
use App\CoreLayout\UIManager\Abstracted\UIManagerAbstracted;
use App\CoreLayout\UIManager\Realization\UIManager;
use Illuminate\Support\ServiceProvider;

class CoreLayoutServiceProvider extends ServiceProvider
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
