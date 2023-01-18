<?php


namespace App\BusinessLayer\Shop\Interfaces\Product;


interface ProductCollectionInterface extends \IteratorAggregate
{
    public function addProduct(ProductInterface $item) : void;
}
