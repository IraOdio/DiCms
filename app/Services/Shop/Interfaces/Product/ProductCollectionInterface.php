<?php


namespace App\Services\Shop\Interfaces\Product;


interface ProductCollectionInterface extends \IteratorAggregate
{
    public function addProduct(ProductInterface $item) : void;
}
