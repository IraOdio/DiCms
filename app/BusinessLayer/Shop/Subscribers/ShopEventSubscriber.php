<?php


namespace App\BusinessLayer\Shop\Subscribers;


use App\BaseLayer\Events\Interfaces\EventBaseInterface;
use App\BusinessLayer\Shop\Events\onAfterCreateOrder;

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
