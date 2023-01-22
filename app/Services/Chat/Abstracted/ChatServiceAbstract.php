<?php


namespace App\Services\Chat\Abstracted;


use App\Services\Chat\EloquentModels\ChatDialogs;
use App\Services\Chat\EloquentModels\ChatDialogsUser;
use App\Services\Chat\EloquentModels\ChatMessages;
use App\Services\Chat\EloquentModels\ChatMessagesDialog;
use App\Services\Chat\EloquentModels\ChatMessagesUser;
use Illuminate\Foundation\Auth\User;

/**
 * Выполняет ответственность - операции в БД и диспатчит соответствующие ивенты
 * Class ChatServiceAbstract
 * @package App\Services\Chat\Abstracted
 */
abstract class ChatServiceAbstract
{
    public function __construct(
        protected ChatDialogs $chatDialogsEloquent,
        protected ChatDialogsUser $chatDialogsUserEloquent,
        protected ChatMessages $chatMessagesEloquent,
        protected ChatMessagesDialog $chatMessagesDialogEloquent,
        protected ChatMessagesUser $chatMessagesUserEloquent,
        protected User $user,
    )
    {

    }

    abstract public function chatMessagePostAction(string $message, int $userId, int $dialogId): int;
}
