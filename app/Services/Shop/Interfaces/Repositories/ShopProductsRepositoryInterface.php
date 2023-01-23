<?php


namespace App\Services\Shop\Interfaces\Repositories;


interface ShopProductsRepositoryInterface
{
    /**
     * Создает запись в хранилище - возвращает идентификатор записи
     * @param array $data
     * @return int
     */
    public function create(array $data) : int;
}
