<?php


namespace App\BusinessLayer\Chat\Abstracted;

use App\BaseLayer\Logger\Abstracted\LoggerAbstract;

/**
 * Выполняет ответственность - "пнуть сервер с  веб-сокетами" ;)
 * Class ChatApiAbstract
 * @package App\BusinessLayer\Chat\Abstracted
 */
abstract class ChatApiAbstract
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }

    abstract public function sendChatMessageRequest(array $data) : bool;
}
