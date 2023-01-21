<?php


namespace App\BusinessLayer\Shop\Realization\Order;


use App\BusinessLayer\Shop\Interfaces\Order\OrderCollectionInterface;
use App\BusinessLayer\Shop\Interfaces\Order\OrderInterface;

class OrderCollection implements OrderCollectionInterface
{
    /**
     * @var OrderInterface[]
     */
    protected array $orders = [];

    public function __construct(OrderInterface ...$orders)
    {
        $this->orders = $orders;
    }

    public function addOrder(OrderInterface $order): void
    {
        $this->orders[] = $order;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orders);
    }
}
