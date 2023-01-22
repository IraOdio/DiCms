<?php


namespace App\Services\Shop\Realization\Order;


use App\Services\Shop\Interfaces\Order\OrderCollectionInterface;
use App\Services\Shop\Interfaces\Order\OrderInterface;

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
