<?php


namespace App\BusinessLayer\Shop\Abstracted\Order;


use App\BusinessLayer\Shop\Interfaces\Order\OrderInterface;
use App\BusinessLayer\Shop\Interfaces\Product\ProductCollectionInterface;

abstract class OrderAbstract implements OrderInterface
{
    public function __construct(ProductCollectionInterface $productCollection)
    {
    }
}
