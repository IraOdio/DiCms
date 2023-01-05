<?php


namespace App\BussinessLayout\LocalizationLayout\Providers;


use App\BussinessLayout\LocalizationLayout\Abstracted\LocalizationAbstract;
use App\BussinessLayout\LocalizationLayout\Realization\LocalizationMaster;
use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LocalizationAbstract::class,function(){
            return new LocalizationMaster();
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
