<?php


namespace App\BusinessLayer\Shop\Providers;

use App\BusinessLayer\Shop\Interfaces\Product\ProductInterface;
use App\BusinessLayer\Shop\Interfaces\Order\OrderInterface;
use App\BusinessLayer\Shop\Interfaces\ShopManager\ShopManagerInterface;
use App\BusinessLayer\Shop\Realization\Product\Product;
use App\BusinessLayer\Shop\Realization\Order\Order;
use App\BusinessLayer\Shop\Realization\ShopManager\ShopManager;
use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    public $bindings = [
        ShopManagerInterface::class => ShopManager::class
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
