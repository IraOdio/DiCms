<?php


namespace App\Services\Chat\Interfaces\Repositories;


interface ChatMessagesUserRepositoryInterface
{
    /**
     * Создает запись в хранилище - возвращает идентификатор записи
     * @param array $data
     * @return int
     */
    public function create(array $data) : int;
}
