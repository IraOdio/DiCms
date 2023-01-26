<?php


namespace App\Services\Shop\Interfaces\ShopManager;


use App\Services\Shop\Interfaces\Product\ProductInterface;
use App\Services\Shop\ShopResult;

interface ShopManagerOrderInterface
{
    public function addProductToOrder(ProductInterface $product) : ShopResult;
}
