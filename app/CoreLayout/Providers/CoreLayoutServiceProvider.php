<?php


namespace App\CoreLayout\Providers;


use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\CoreLayout\Logger\Realization\DefaultLogger;
use Illuminate\Support\ServiceProvider;

class CoreLayoutServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoggerAbstract::class,function(){
            return new DefaultLogger();
        });
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
