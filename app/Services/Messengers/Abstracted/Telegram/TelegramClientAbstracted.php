<?php


namespace App\Services\Messengers\Abstracted\Telegram;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Messengers\Abstracted\MessengerClientAbstracted;


abstract class TelegramClientAbstracted extends MessengerClientAbstracted
{
    public function __construct(LoggerAbstract $logger, protected TelegramApiAbstracted $telegramApi)
    {
        parent::__construct($logger->rebuildLogger('messengers/telegram/general.log'));
    }

    abstract public function sendMessage(string $text) : void;
}
