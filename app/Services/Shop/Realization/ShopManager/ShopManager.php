<?php


namespace App\Services\Shop\Realization\ShopManager;


use App\Services\Shop\Abstracted\ShopManager\ShopManagerAbstract;
use App\Services\Shop\Interfaces\Order\OrderCollectionInterface;
use App\Services\Shop\Interfaces\Order\OrderInterface;
use App\Services\Shop\Interfaces\Product\ProductCollectionInterface;
use App\Services\Shop\Interfaces\Product\ProductInterface;
use App\Services\Shop\Realization\Order\Order;
use JetBrains\PhpStorm\Pure;

class ShopManager extends ShopManagerAbstract
{

    #[Pure] public function createOrder(ProductCollectionInterface $productCollection): OrderInterface
    {
        $order = new Order();
    }

    public function getOrderFromId(int $orderId): OrderInterface
    {
        // TODO: Implement getOrderFromId() method.
    }

    public function getOrdersListFromUser(int $userId): OrderCollectionInterface
    {
        // TODO: Implement getOrdersListFromUser() method.
    }

    public function addProductToOrder(OrderInterface $order, ProductInterface $product, int $count = 1): bool
    {
        // TODO: Implement addProductToOrder() method.
    }
}
