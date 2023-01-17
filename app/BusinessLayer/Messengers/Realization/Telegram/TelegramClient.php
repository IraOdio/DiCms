<?php


namespace App\BusinessLayer\Messengers\Realization\Telegram;


use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramClientAbstracted;

class TelegramClient extends TelegramClientAbstracted
{

    public function sendMessage(string $text): void
    {
       $this->telegramApi->sendMessageRequest($text);
    }
}
