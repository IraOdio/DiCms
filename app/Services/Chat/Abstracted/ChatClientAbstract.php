<?php


namespace App\Services\Chat\Abstracted;


use App\Services\Logger\Abstracted\LoggerAbstract;

/**
 * Прослойка над ChatApi
 * Class ChatClientAbstract
 * @package App\Services\Chat\Abstracted
 */
abstract class ChatClientAbstract
{
    public function __construct(protected LoggerAbstract $logger,protected ChatApiAbstract $chatApi)
    {
    }

    abstract public function sendMessage(array $data) : bool;
}
