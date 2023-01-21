<?php


namespace App\BusinessLayer\Shop\Interfaces\Order;


interface OrderCollectionInterface extends \IteratorAggregate
{
    public function addOrder(OrderInterface $order) : void;
}
