<?php


namespace App\BusinessLayer\Notifications\Providers;


use App\BusinessLayer\Notifications\Abstracted\NotificationManagerAbstracted;
use App\BusinessLayer\Notifications\Realization\NotificationManager;
use Illuminate\Support\ServiceProvider;

class NotificationsServiceProvider extends ServiceProvider
{
    public $bindings = [
        NotificationManagerAbstracted::class => NotificationManager::class
    ];
}
