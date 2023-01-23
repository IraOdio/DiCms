<?php


namespace App\Services\Shop\Interfaces\Repositories;


interface ShopOrdersRepositoryInterface
{
    /**
     * Создает запись в хранилище - возвращает идентификатор записи
     * @param array $data
     * @return int
     */
    public function create(array $data) : int;
}
