<?php


namespace App\BusinessLayer\Chat\Realization;


use App\BusinessLayer\Chat\Abstracted\ChatServiceAbstract;
use App\BusinessLayer\Chat\EloquentModels\ChatDialogs;
use App\BusinessLayer\Chat\Events\onAfterChatMessagePostEvent;
use App\BusinessLayer\Chat\Exceptions\ChatMessagePostNotValidDialogException;
use App\BusinessLayer\Chat\Exceptions\ChatMessagePostNotValidUserException;
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

        $messageEloquent = $this->chatMessagesEloquent->create(['content' => $message]);
        $messageDialogEloquent = $this->chatMessagesDialogEloquent->create(['message_id' => $messageEloquent->id, 'dialog_id' => $dialogId]);
        $messageUserEloquent = $this->chatMessagesUserEloquent->create(['message_id' => $messageEloquent->id,'user_id' => $userId]);

        $eventData = [
            'message' => [
                'content' => $message,
                'id' => $messageEloquent->id
            ],
            'dialog' => ['id' => $dialogId],
            'user' => ['id' => $userId]
        ];
        onAfterChatMessagePostEvent::dispatch($eventData);

        return $messageEloquent->id;
    }
}
