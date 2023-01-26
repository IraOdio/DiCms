<?php


namespace App\Services\Shop\Interfaces\ShopManager;


use App\Services\Shop\Interfaces\Product\ProductCollectionInterface;
use App\Services\Shop\Interfaces\Product\ProductInterface;

interface ShopManagerProductInterface
{
    public function createProduct(array $data) : ProductInterface;
    public function getProductById(int $id) : ProductInterface;
    public function getProducts(array $filter = []) : ProductCollectionInterface;
    public function updateProductById(int $id, array $data = []) : ProductInterface;
}
