<?php


namespace App\Services\Shop\Interfaces\Repositories;


interface ShopOrdersRepositoryInterface
{
    /**
     * Создает запись в хранилище - возвращает массив данных
     * @param array $data
     * @return array
     */
    public function create(array $data) : array;
}
