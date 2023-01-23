<?php


namespace App\Services\Shop\Abstracted\ShopManager;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Shop\Interfaces\Repositories\ShopOrderProductRepositoryInterface;
use App\Services\Shop\Interfaces\Repositories\ShopOrdersRepositoryInterface;
use App\Services\Shop\Interfaces\Repositories\ShopProductsRepositoryInterface;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerInterface;

abstract class ShopManagerAbstract implements ShopManagerInterface
{
    public function __construct(
        protected LoggerAbstract $logger,
        protected ShopOrderProductRepositoryInterface $shopOrderProductRepository,
        protected ShopOrdersRepositoryInterface $shopOrdersRepository,
        protected ShopProductsRepositoryInterface $shopProductsRepository
    )
    {
    }
}
