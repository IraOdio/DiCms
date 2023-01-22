<?php


namespace App\Services\Shop\Interfaces\Order;


interface OrderCollectionInterface extends \IteratorAggregate
{
    public function addOrder(OrderInterface $order) : void;
}
