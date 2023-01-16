<?php


namespace App\BusinessLayer\Notifications\Realization;


use App\BusinessLayer\Notifications\Abstracted\NotificationManagerAbstracted;

class NotificationManager extends NotificationManagerAbstracted
{

    public function sendNotification(string $content): void
    {
        $this->telegram->sendMessage($content);
    }
}
