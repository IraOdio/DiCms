<?php


namespace App\Services\Chat\Abstracted;


use App\Services\Chat\Interfaces\Repositories\ChatDialogsRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatDialogsUserRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesDialogRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesUserRepositoryInterface;
use App\Services\User\Interfaces\UserRepositoryInterface;

/**
 * Выполняет ответственность - операции в БД через репозитории и диспатчит соответствующие ивенты
 * Class ChatServiceAbstract
 * @package App\Services\Chat\Abstracted
 */
abstract class ChatServiceAbstract
{
    public function __construct(
        protected UserRepositoryInterface $userRepository,
        protected ChatDialogsRepositoryInterface $chatDialogsRepository,
        protected ChatDialogsUserRepositoryInterface $chatDialogsUserRepository,
        protected ChatMessagesRepositoryInterface $chatMessagesRepository,
        protected ChatMessagesDialogRepositoryInterface $chatMessagesDialogRepository,
        protected ChatMessagesUserRepositoryInterface $chatMessagesUserRepository,
    )
    {

    }

    abstract public function chatMessagePostAction(string $message, int $userId, int $dialogId): int;
}
