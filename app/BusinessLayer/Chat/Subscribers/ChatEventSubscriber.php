<?php


namespace App\BusinessLayer\Chat\Subscribers;


use App\BaseLayer\Events\Interfaces\EventBaseInterface;
use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Chat\Abstracted\ChatClientAbstract;
use App\BusinessLayer\Chat\Events\onAfterChatMessagePostEvent;

class ChatEventSubscriber
{
    public function __construct(protected LoggerAbstract $logger,protected ChatClientAbstract $chatClient)
    {
        $this->logger = $this->logger->rebuildLogger('chatEventSubscriber/general.log');
    }

    public function handleAfterChatMessagePost(EventBaseInterface $event) : void
    {
        $data = $event->getEventData();
        $this->chatClient->sendMessage($data);
    }

    /**
     * Зарегистрировать слушателей для подписчика.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe(\Illuminate\Events\Dispatcher $events){
        $events->listen(onAfterChatMessagePostEvent::class,[ChatEventSubscriber::class,'handleAfterChatMessagePost']);
    }
}
