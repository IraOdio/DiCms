<?php


namespace App\BusinessLayer\Messengers\Providers;


use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramAbstracted;
use App\BusinessLayer\Messengers\Realization\Telegram\TelegramNull;
use Illuminate\Support\ServiceProvider;

class MessengerServiceProvider extends ServiceProvider
{
    public $bindings = [
        TelegramAbstracted::class => TelegramNull::class
    ];
}
