<?php


namespace App\Services\Notifications\Realization;


use App\Services\Notifications\Abstracted\NotificationManagerAbstracted;

class NotificationManager extends NotificationManagerAbstracted
{

    public function sendNotification(string $content): void
    {
        $this->telegram->sendMessage($content);
    }
}
