<?php


namespace App\BusinessLayer\Chat\Realization;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Chat\Abstracted\ChatApiAbstract;

/*
 * NullApi - логирует запись вместо реальной отправки серверу с вебсокетами
 */
class ChatNullApi extends ChatApiAbstract
{
    public function __construct(LoggerAbstract $logger)
    {
        parent::__construct($logger->rebuildLogger('chat/general.log'));
    }

    public function sendChatMessageRequest(array $data): bool
    {
        $this->logger->debug("Делаем вид, что пинаем вебсокеты с данными",['data' => $data]);
        return true;
    }
}
