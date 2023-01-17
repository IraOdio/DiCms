<?php


namespace App\BusinessLayer\Chat\Realization;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Chat\Abstracted\ChatApiAbstract;
use App\BusinessLayer\Chat\Abstracted\ChatClientAbstract;

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
