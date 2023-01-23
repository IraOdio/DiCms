<?php


namespace App\Services\Chat\Realization;


use App\Services\Chat\Abstracted\ChatServiceAbstract;
use App\Services\Chat\EloquentModels\ChatDialogs;
use App\Services\Chat\Events\onAfterChatMessagePostEvent;
use App\Services\Chat\Exceptions\ChatMessagePostNotValidDialogException;
use App\Services\Chat\Exceptions\ChatMessagePostNotValidUserException;
use Illuminate\Foundation\Auth\User;


class ChatService extends ChatServiceAbstract
{
    public function chatMessagePostAction(string $message, int $userId, int $dialogId): int
    {
        $dialogArray = $this->chatDialogsRepository->findDialogFromId($dialogId);
        if (empty($dialogArray)){
            return throw new ChatMessagePostNotValidDialogException("Dialog with id {$dialogId} not found!");
        }
        $userArray = $this->userRepository->findUserFromId($userId);
        if (empty($userArray)){
            return throw new ChatMessagePostNotValidUserException("User with id {$userId} not found!");
        }

        $messageId = $this->chatMessagesRepository->create(['content' => $message]);
        $messageDialogId = $this->chatMessagesDialogRepository->create(['message_id' => $messageId, 'dialog_id' => $dialogId]);
        $messageUserId = $this->chatMessagesUserRepository->create(['message_id' => $messageId,'user_id' => $userId]);

        $eventData = [
            'message' => [
                'content' => $message,
                'id' => $messageId
            ],
            'dialog' => ['id' => $dialogId],
            'user' => ['id' => $userId]
        ];
        onAfterChatMessagePostEvent::dispatch($eventData);

        return $messageId;
    }
}
