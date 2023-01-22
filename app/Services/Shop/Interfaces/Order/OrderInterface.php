<?php


namespace App\Services\Shop\Interfaces\Order;


use App\Services\Shop\Interfaces\Product\ProductCollectionInterface;
use App\Services\Shop\Interfaces\Product\ProductInterface;

/**
 * Заказ - сущность содержащая сведения о товарах приобретамых клиентов, заказ может быть в стадии "клиент еще думает" и "клиент нажал оформить" =D
 * Interface OrderInterface
 * @package App\Services\Shop\Interfaces\Order
 */
interface OrderInterface
{
    public function addCollectionProduct(ProductCollectionInterface $productCollection) : void;
    public function addProduct(ProductInterface $product) : void;
}
