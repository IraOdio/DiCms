<?php


namespace App\Services\Shop\Abstracted\ShopManager;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Shop\Interfaces\Repositories\ShopOrderProductRepositoryInterface;
use App\Services\Shop\Interfaces\Repositories\ShopOrdersRepositoryInterface;
use App\Services\Shop\Interfaces\Repositories\ShopProductsRepositoryInterface;


abstract class ShopManagerAbstract
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }
}
