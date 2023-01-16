<?php


namespace App\BusinessLayer\Chat\Abstracted;


use App\BusinessLayer\Chat\EloquentModels\ChatDialogs;
use App\BusinessLayer\Chat\EloquentModels\ChatDialogsUser;
use App\BusinessLayer\Chat\EloquentModels\ChatMessages;
use App\BusinessLayer\Chat\EloquentModels\ChatMessagesDialog;
use App\BusinessLayer\Chat\EloquentModels\ChatMessagesUser;
use Illuminate\Foundation\Auth\User;

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
