<?php


namespace App\BussinessLayout\ZeroLayout\Providers;


use App\BussinessLayout\ZeroLayout\Logger\Abstracted\LoggerAbstract;
use App\BussinessLayout\ZeroLayout\Logger\Realization\DefaultLogger;
use Illuminate\Support\ServiceProvider;

class ZeroLayoutServiceProvider extends ServiceProvider
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
