<?php


namespace App\BusinessLayer\Messengers\Realization\Telegram;


use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramAbstracted;

/**
 * Что-то вроде моковой реализации для телеграмма
 * Class TelegramNull
 * @package App\BusinessLayer\Messengers\Realization\Telegram
 */
class TelegramNull extends TelegramAbstracted
{

    public function sendMessage(string $text): void
    {
        $prefix = "Telegram Message:";
        $this->logger->debug("{$prefix}{$text}");
    }
}
