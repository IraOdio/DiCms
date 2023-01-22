<?php


namespace App\Services\Messengers\Abstracted\Telegram;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Messengers\Abstracted\MessengerApiAbstracted;

abstract class TelegramApiAbstracted extends MessengerApiAbstracted
{
    public function __construct(LoggerAbstract $logger)
    {
        parent::__construct($logger->rebuildLogger('messengers/telegram/general.log'));
    }

    abstract public function sendMessageRequest(string $text) : bool;
}
