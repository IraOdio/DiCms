<?php

namespace App\Providers;

use App\BusinessLayer\Chat\Subscribers\ChatEventSubscriber;
use App\BusinessLayer\Notifications\Listeners\NotificationTelegramListener;

use App\BusinessLayer\Notifications\Subscribers\NotificationUserEventSubscriber;
use App\BusinessLayer\Shop\Subscribers\ShopEventSubscriber;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [

    ];

    /**
     * Классы подписчиков для регистрации.
     *
     * @var array
     */
    protected $subscribe = [
        NotificationUserEventSubscriber::class, ChatEventSubscriber::class, ShopEventSubscriber::class
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
