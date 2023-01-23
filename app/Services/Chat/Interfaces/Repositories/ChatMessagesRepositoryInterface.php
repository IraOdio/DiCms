<?php


namespace App\Services\Chat\Interfaces\Repositories;


interface ChatMessagesRepositoryInterface
{
    /**
     * Создает запись в хранилище - возвращает идентификатор записи
     * @param array $data
     * @return int
     */
    public function create(array $data) : int;
}
