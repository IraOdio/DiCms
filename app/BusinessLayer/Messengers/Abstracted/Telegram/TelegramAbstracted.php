<?php


namespace App\BusinessLayer\Messengers\Abstracted\Telegram;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Messengers\Abstracted\MessengerAbstracted;

abstract class TelegramAbstracted extends MessengerAbstracted
{
    public function __construct(LoggerAbstract $logger)
    {
        parent::__construct($logger->rebuildLogger('messengers/telegram/general.log'));
    }

    abstract public function sendMessage(string $text) : void;
}
