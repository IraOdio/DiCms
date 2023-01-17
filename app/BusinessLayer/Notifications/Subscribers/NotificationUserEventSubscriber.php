<?php


namespace App\BusinessLayer\Notifications\Subscribers;


use App\BusinessLayer\Notifications\Abstracted\NotificationManagerAbstracted;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;

class NotificationUserEventSubscriber
{
    public function __construct(protected NotificationManagerAbstracted $notificationManager)
    {
    }

    /**
     * Обработать событие входа пользователя в систему.
     */
    public function handleUserLogin($event) {
        $userEloquent = $event->user;
        $content = "Event User Login, with ID = {$userEloquent->id} and Name = {$userEloquent->name}";
        $this->notificationManager->sendNotification($content);
    }

    /**
     * Обработать событие выхода пользователя из системы.
     */
    public function handleUserLogout($event) {

    }

    /**
     * Зарегистрировать слушателей для подписчика.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe(\Illuminate\Events\Dispatcher $events)
    {
        $events->listen(
            Login::class,
            [NotificationUserEventSubscriber::class, 'handleUserLogin']
        );

        $events->listen(
            Logout::class,
            [NotificationUserEventSubscriber::class, 'handleUserLogout']
        );
    }
}
