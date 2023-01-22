<?php


namespace App\Services\Notifications\Abstracted;


use App\Services\Messengers\Abstracted\Telegram\TelegramClientAbstracted;

abstract class NotificationManagerAbstracted
{
    // TODO - Сделать коллекцию мессенеджерей через интерфейс
    public function __construct(protected TelegramClientAbstracted $telegram)
    {
    }

    abstract public function sendNotification(string $content) : void;
}
