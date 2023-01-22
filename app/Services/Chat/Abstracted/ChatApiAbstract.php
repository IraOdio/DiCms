<?php


namespace App\Services\Chat\Abstracted;

use App\Services\Logger\Abstracted\LoggerAbstract;

/**
 * Выполняет ответственность - "пнуть сервер с  веб-сокетами" ;)
 * Class ChatApiAbstract
 * @package App\Services\Chat\Abstracted
 */
abstract class ChatApiAbstract
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }

    abstract public function sendChatMessageRequest(array $data) : bool;
}
