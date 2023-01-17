<?php


namespace App\BusinessLayer\Chat\Abstracted;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;

/**
 * Прослойка над ChatApi
 * Class ChatClientAbstract
 * @package App\BusinessLayer\Chat\Abstracted
 */
abstract class ChatClientAbstract
{
    public function __construct(protected LoggerAbstract $logger,protected ChatApiAbstract $chatApi)
    {
    }

    abstract public function sendMessage(array $data) : bool;
}
