<?php


namespace App\BussinessLayout\ZeroLayout\Providers;


use App\BussinessLayout\ZeroLayout\Logger\Abstracted\AbstractLogger;
use App\BussinessLayout\ZeroLayout\Logger\Realization\DefaultLogger;
use Illuminate\Support\ServiceProvider;

class ZeroLayoutProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AbstractLogger::class,function(){
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
