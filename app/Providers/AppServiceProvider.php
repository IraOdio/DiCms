<?php

namespace App\Providers;

use App\Services\Blog\Interfaces\Repositories\BlogCategoryRepositoryInterface;
use App\Services\Blog\Interfaces\Repositories\BlogCommentRepositoryInterface;
use App\Services\Blog\Interfaces\Repositories\BlogPostRepositoryInterface;
use App\Services\Blog\Repositories\Eloquent\BlogCategoryRepositoryElo;
use App\Services\Blog\Repositories\Eloquent\BlogCommentRepositoryElo;
use App\Services\Blog\Repositories\Eloquent\BlogPostRepositoryElo;
use App\Services\Chat\Interfaces\Repositories\ChatDialogsRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatDialogsUserRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesDialogRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesRepositoryInterface;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesUserRepositoryInterface;
use App\Services\Chat\Realization\Repositories\ChatDialogsRepository;
use App\Services\Chat\Realization\Repositories\ChatDialogsUserRepository;
use App\Services\Chat\Realization\Repositories\ChatMessagesDialogRepository;
use App\Services\Chat\Realization\Repositories\ChatMessagesRepository;
use App\Services\Chat\Realization\Repositories\ChatMessagesUserRepository;
use App\Services\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\Services\DebugBarManager\Realization\DebugBarManager;
use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Logger\Realization\DefaultLogger;
use App\Services\Shop\Interfaces\Repositories\ShopOrderProductRepositoryInterface;
use App\Services\Shop\Interfaces\Repositories\ShopOrdersRepositoryInterface;
use App\Services\Shop\Interfaces\Repositories\ShopProductsRepositoryInterface;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerOrderInterface;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerProductInterface;
use App\Services\Shop\Realization\Repositories\ShopOrderProductRepository;
use App\Services\Shop\Realization\Repositories\ShopOrdersRepository;
use App\Services\Shop\Realization\Repositories\ShopProductsRepository;
use App\Services\Shop\Realization\ShopManager\ShopManagerOrder;
use App\Services\Shop\Realization\ShopManager\ShopManagerProduct;
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
use App\Services\User\Interfaces\UserManagerInterface;
use App\Services\User\Interfaces\UserRepositoryInterface;
use App\Services\User\Realization\Repositories\UserRepository;
use App\Services\User\Realization\UserManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        // region Shop
        ShopProductsRepositoryInterface::class => ShopProductsRepository::class,
        ShopOrdersRepositoryInterface::class => ShopOrdersRepository::class,
        ShopOrderProductRepositoryInterface::class => ShopOrderProductRepository::class,
        ShopManagerProductInterface::class => ShopManagerProduct::class,
        ShopManagerOrderInterface::class => ShopManagerOrder::class,
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
        UserRepositoryInterface::class => UserRepository::class,
        // endregion

        // region Chat
        ChatApiAbstract::class => ChatNullApi::class,
        ChatClientAbstract::class => ChatClient::class,
        ChatServiceAbstract::class => ChatService::class,
        ChatDialogsRepositoryInterface::class => ChatDialogsRepository::class,
        ChatDialogsUserRepositoryInterface::class => ChatDialogsUserRepository::class,
        ChatMessagesDialogRepositoryInterface::class => ChatMessagesDialogRepository::class,
        ChatMessagesRepositoryInterface::class => ChatMessagesRepository::class,
        ChatMessagesUserRepositoryInterface::class => ChatMessagesUserRepository::class,
        // endregion

        // region Localization
        LocalizationAbstract::class => LocalizationMaster::class,
        // endregion

        // region Base
        DebugBarManagerAbstracted::class => DebugBarManager::class,
        LoggerAbstract::class => DefaultLogger::class,
        UIManagerAbstracted::class => UIManager::class,
        // endregion

        // region Blog
        BlogPostRepositoryInterface::class => BlogPostRepositoryElo::class,
        BlogCategoryRepositoryInterface::class => BlogCategoryRepositoryElo::class,
        BlogCommentRepositoryInterface::class => BlogCommentRepositoryElo::class

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
