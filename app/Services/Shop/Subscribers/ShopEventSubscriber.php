<?php


namespace App\Services\Shop\Subscribers;


use App\Events\Interfaces\EventBaseInterface;
use App\Services\Shop\Events\onAfterCreateOrder;

class ShopEventSubscriber
{

    public function handleAfterCreateOrder(EventBaseInterface $event) : void
    {

    }

    /**
     * Зарегистрировать слушателей для подписчика.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe(\Illuminate\Events\Dispatcher $events) : void
    {
        $events->listen(
            onAfterCreateOrder::class,
            [ShopEventSubscriber::class,'handleAfterCreateOrder']
        );
    }
}
