<?php

namespace App\Providers;

use App\Services\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\Services\DebugBarManager\Realization\DebugBarManager;
use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Logger\Realization\DefaultLogger;
use App\Services\UIManager\Abstracted\UIManagerAbstracted;
use App\Services\UIManager\Realization\UIManager;
use App\Services\Chat\Abstracted\ChatApiAbstract;
use App\Services\Chat\Abstracted\ChatClientAbstract;
use App\Services\Chat\Abstracted\ChatServiceAbstract;
use App\Services\Chat\Realization\ChatClient;
use App\Services\Chat\Realization\ChatNullApi;
use App\Services\Chat\Realization\ChatService;
use App\Services\Localization\Abstracted\LocalizationAbstract;
use App\Services\Localization\Realization\LocalizationMaster;
use App\Services\Messengers\Abstracted\Telegram\TelegramApiAbstracted;
use App\Services\Messengers\Abstracted\Telegram\TelegramClientAbstracted;
use App\Services\Messengers\Realization\Telegram\TelegramClient;
use App\Services\Messengers\Realization\Telegram\TelegramNullApi;
use App\Services\Notifications\Abstracted\NotificationManagerAbstracted;
use App\Services\Notifications\Realization\NotificationManager;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerInterface;
use App\Services\Shop\Realization\ShopManager\ShopManager;
use App\Services\User\Interfaces\UserManagerInterface;
use App\Services\User\Realization\UserManager;
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
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
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
