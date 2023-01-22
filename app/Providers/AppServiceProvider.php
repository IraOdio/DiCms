<?php

namespace App\Providers;

use App\BaseLayer\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\BaseLayer\DebugBarManager\Realization\DebugBarManager;
use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BaseLayer\Logger\Realization\DefaultLogger;
use App\BaseLayer\UIManager\Abstracted\UIManagerAbstracted;
use App\BaseLayer\UIManager\Realization\UIManager;
use App\BusinessLayer\Chat\Abstracted\ChatApiAbstract;
use App\BusinessLayer\Chat\Abstracted\ChatClientAbstract;
use App\BusinessLayer\Chat\Abstracted\ChatServiceAbstract;
use App\BusinessLayer\Chat\Realization\ChatClient;
use App\BusinessLayer\Chat\Realization\ChatNullApi;
use App\BusinessLayer\Chat\Realization\ChatService;
use App\BusinessLayer\Localization\Abstracted\LocalizationAbstract;
use App\BusinessLayer\Localization\Realization\LocalizationMaster;
use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramApiAbstracted;
use App\BusinessLayer\Messengers\Abstracted\Telegram\TelegramClientAbstracted;
use App\BusinessLayer\Messengers\Realization\Telegram\TelegramClient;
use App\BusinessLayer\Messengers\Realization\Telegram\TelegramNullApi;
use App\BusinessLayer\Notifications\Abstracted\NotificationManagerAbstracted;
use App\BusinessLayer\Notifications\Realization\NotificationManager;
use App\BusinessLayer\Shop\Interfaces\ShopManager\ShopManagerInterface;
use App\BusinessLayer\Shop\Realization\ShopManager\ShopManager;
use App\BusinessLayer\User\Interfaces\UserManagerInterface;
use App\BusinessLayer\User\Realization\UserManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        // region Shop
        ShopManagerInterface::class => ShopManager::class,
        // endregion

        // region Messenger
        TelegramApiAbstracted::class => TelegramNullApi::class,
        TelegramClientAbstracted::class => TelegramClient::class,
        // endregion

        // region Notification
        NotificationManagerAbstracted::class => NotificationManager::class,
        // endregion

        // region User
        UserManagerInterface::class => UserManager::class,
        // endregion

        // region Chat
        ChatApiAbstract::class => ChatNullApi::class,
        ChatClientAbstract::class => ChatClient::class,
        ChatServiceAbstract::class => ChatService::class,
        // endregion

        // region Localization
        LocalizationAbstract::class => LocalizationMaster::class,
        // endregion

        // region Base
        DebugBarManagerAbstracted::class => DebugBarManager::class,
        LoggerAbstract::class => DefaultLogger::class,
        UIManagerAbstracted::class => UIManager::class,
        // endregion
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
