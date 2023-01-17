<?php


namespace App\BusinessLayer\Messengers\Abstracted\Telegram;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Messengers\Abstracted\MessengerApiAbstracted;

abstract class TelegramApiAbstracted extends MessengerApiAbstracted
{
    public function __construct(LoggerAbstract $logger)
    {
        parent::__construct($logger->rebuildLogger('messengers/telegram/general.log'));
    }

    abstract public function sendMessageRequest(string $text) : bool;
}
