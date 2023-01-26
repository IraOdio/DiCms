<?php


namespace App\Services\Shop\Interfaces\Repositories;


interface ShopProductsRepositoryInterface
{
    /**
     * Create row in storage - return array data
     * @param array $data
     * @return array
     */
    public function create(array $data) : array;
}
