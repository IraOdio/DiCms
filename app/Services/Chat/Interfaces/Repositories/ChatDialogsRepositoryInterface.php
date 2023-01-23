<?php


namespace App\Services\Chat\Interfaces\Repositories;


interface ChatDialogsRepositoryInterface
{
    /**
     * Возвращает диалог в структуре массива, если диалог не найден, массив будет пустым
     * @param int $dialogId
     * @return array
     */
    public function findDialogFromId(int $dialogId) : array;
}
