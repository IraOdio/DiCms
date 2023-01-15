<?php


namespace App\BussinessLayout\ChatLayout\Abstracted;


use App\BussinessLayout\ChatLayout\EloquentModels\ChatDialogs;
use App\BussinessLayout\ChatLayout\EloquentModels\ChatDialogsUser;
use App\BussinessLayout\ChatLayout\EloquentModels\ChatMessages;
use App\BussinessLayout\ChatLayout\EloquentModels\ChatMessagesDialog;
use App\BussinessLayout\ChatLayout\EloquentModels\ChatMessagesUser;
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
