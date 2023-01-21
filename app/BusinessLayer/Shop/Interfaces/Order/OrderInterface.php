<?php


namespace App\BusinessLayer\Shop\Interfaces\Order;


use App\BusinessLayer\Shop\Interfaces\Product\ProductCollectionInterface;
use App\BusinessLayer\Shop\Interfaces\Product\ProductInterface;

/**
 * Заказ - сущность содержащая сведения о товарах приобретамых клиентов, заказ может быть в стадии "клиент еще думает" и "клиент нажал оформить" =D
 * Interface OrderInterface
 * @package App\BusinessLayer\Shop\Interfaces\Order
 */
interface OrderInterface
{
    public function addCollectionProduct(ProductCollectionInterface $productCollection) : void;
    public function addProduct(ProductInterface $product) : void;
}
