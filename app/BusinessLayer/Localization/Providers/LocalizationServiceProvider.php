<?php


namespace App\BusinessLayer\Localization\Providers;


use App\BusinessLayer\Localization\Abstracted\LocalizationAbstract;
use App\BusinessLayer\Localization\Realization\LocalizationMaster;
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
