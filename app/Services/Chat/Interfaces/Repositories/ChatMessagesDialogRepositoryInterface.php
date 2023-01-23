<?php


namespace App\Services\Chat\Interfaces\Repositories;


interface ChatMessagesDialogRepositoryInterface
{
    /**
     * Создает запись в хранилище - возвращает идентификатор записи
     * @param array $data
     * @return int
     */
    public function create(array $data) : int;
}
