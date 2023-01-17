<?php


namespace App\BusinessLayer\Messengers\Providers;


use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramApiAbstracted;
use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramClientAbstracted;
use App\BusinessLayer\Messengers\Realization\Telegram\TelegramClient;
use App\BusinessLayer\Messengers\Realization\Telegram\TelegramNullApi;
use Illuminate\Support\ServiceProvider;

class MessengerServiceProvider extends ServiceProvider
{
    public $bindings = [
        TelegramApiAbstracted::class => TelegramNullApi::class,
        TelegramClientAbstracted::class => TelegramClient::class
    ];
}
