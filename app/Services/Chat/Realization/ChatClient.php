<?php


namespace App\Services\Chat\Realization;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Chat\Abstracted\ChatApiAbstract;
use App\Services\Chat\Abstracted\ChatClientAbstract;

class ChatClient extends ChatClientAbstract
{
    public function __construct(LoggerAbstract $logger, ChatApiAbstract $chatApi)
    {
        parent::__construct($logger->rebuildLogger('chat/general.log'),$chatApi);
    }

    public function sendMessage(array $data): bool
    {
        $this->chatApi->sendChatMessageRequest($data);
        return true;
    }
}
