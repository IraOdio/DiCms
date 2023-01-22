<?php


namespace App\Services\Shop\Abstracted\Order;


use App\Services\Shop\Interfaces\Order\OrderInterface;
use App\Services\Shop\Interfaces\Product\ProductCollectionInterface;

abstract class OrderAbstract implements OrderInterface
{
    public function __construct(ProductCollectionInterface $productCollection)
    {
    }
}
