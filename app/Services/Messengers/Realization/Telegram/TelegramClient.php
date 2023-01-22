<?php


namespace App\Services\Messengers\Realization\Telegram;


use App\Services\Messengers\Abstracted\Telegram\TelegramClientAbstracted;

class TelegramClient extends TelegramClientAbstracted
{

    public function sendMessage(string $text): void
    {
       $this->telegramApi->sendMessageRequest($text);
    }
}
