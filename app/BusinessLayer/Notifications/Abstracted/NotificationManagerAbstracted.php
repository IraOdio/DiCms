<?php


namespace App\BusinessLayer\Notifications\Abstracted;


use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramAbstracted;

abstract class NotificationManagerAbstracted
{
    // TODO - Сделать коллекцию мессенеджерей через интерфейс
    public function __construct(protected TelegramAbstracted $telegram)
    {
    }

    abstract public function sendNotification(string $content) : void;
}
