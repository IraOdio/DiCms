<?php


namespace App\BusinessLayer\Shop\Interfaces\ShopManager;


use App\BusinessLayer\Shop\Interfaces\Order\OrderCollectionInterface;
use App\BusinessLayer\Shop\Interfaces\Order\OrderInterface;
use App\BusinessLayer\Shop\Interfaces\Product\ProductCollectionInterface;
use App\BusinessLayer\Shop\Interfaces\Product\ProductInterface;

interface ShopManagerInterface
{
    /**
     * Создает заказ
     * @param ProductCollectionInterface $productCollection
     * @return OrderInterface
     */
     public function createOrder(ProductCollectionInterface $productCollection) : OrderInterface;

    /**
     * Получить заказ по его иду
     * @param int $orderId
     * @return OrderInterface
     */
     public function getOrderFromId(int $orderId) : OrderInterface;

    /**
     * Получить коллекцию заказов пользователя
     * @param int $userId
     * @return OrderCollectionInterface
     */
     public function getOrdersListFromUser(int $userId) : OrderCollectionInterface;

    /**
     * Добавить в заказ продукт с установленным количеством
     * @param OrderInterface $order
     * @param ProductInterface $product
     * @param int $count
     * @return bool
     */
     public function addProductToOrder(OrderInterface $order,ProductInterface $product,int $count = 1) : bool;
     // public function updateProductToOrder(OrderInterface $order,)
}
