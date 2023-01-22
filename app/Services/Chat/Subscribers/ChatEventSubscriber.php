<?php


namespace App\Services\Chat\Subscribers;


use App\Events\Interfaces\EventBaseInterface;
use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Chat\Abstracted\ChatClientAbstract;
use App\Services\Chat\Events\onAfterChatMessagePostEvent;

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
