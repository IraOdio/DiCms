<?php


namespace App\Services\Messengers\Realization\Telegram;


use App\Services\Messengers\Abstracted\Telegram\TelegramApiAbstracted;

/**
 * Что-то вроде моковой реализации для телеграмма
 * Class TelegramNull
 * @package App\Services\Messengers\Realization\Telegram
 */
class TelegramNullApi extends TelegramApiAbstracted
{

    public function sendMessageRequest(string $text): bool
    {
        $prefix = "Telegram Message:";
        $this->logger->debug("{$prefix}{$text}");
        return true;
    }
}
