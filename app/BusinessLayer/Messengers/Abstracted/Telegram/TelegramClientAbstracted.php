<?php


namespace App\BusinessLayer\Messengers\Abstracted\Telegram;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Messengers\Abstracted\MessengerClientAbstracted;


abstract class TelegramClientAbstracted extends MessengerClientAbstracted
{
    public function __construct(LoggerAbstract $logger, protected TelegramApiAbstracted $telegramApi)
    {
        parent::__construct($logger->rebuildLogger('messengers/telegram/general.log'));
    }

    abstract public function sendMessage(string $text) : void;
}
