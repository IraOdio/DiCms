<?php


namespace App\BussinessLayout\ChatLayout\Realization;


use App\BussinessLayout\ChatLayout\Abstracted\ChatServiceAbstract;
use App\BussinessLayout\ChatLayout\EloquentModels\ChatDialogs;
use App\BussinessLayout\ChatLayout\Exceptions\ChatMessagePostNotValidDialogException;
use App\BussinessLayout\ChatLayout\Exceptions\ChatMessagePostNotValidUserException;
use Illuminate\Foundation\Auth\User;


class ChatService extends ChatServiceAbstract
{
    public function chatMessagePostAction(string $message, int $userId, int $dialogId): int
    {
        $dialogEloquent = $this->chatDialogsEloquent->where('id', $dialogId)->first();
        if (!$dialogEloquent instanceof ChatDialogs){
            return throw new ChatMessagePostNotValidDialogException("Dialog with id {$dialogId} not found!");
        }
        $userEloquent = $this->user->where('id',$userId)->first();
        if (!$userEloquent instanceof User){
            return throw new ChatMessagePostNotValidUserException("User with id {$userId} not found!");
        }

        return 1;
    }
}
