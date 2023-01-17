<?php


namespace App\BusinessLayer\Chat\Events;


use App\BaseLayer\Events\Interfaces\EventBaseInterface;
use Illuminate\Foundation\Events\Dispatchable;

/**
 * Данные в виде - array< message : < id : int, content : string >, dialog : < id : int>, user : < id : int> >
 * Class onAfterChatMessagePostEvent
 * @package App\BusinessLayer\Chat\Events
 */
class onAfterChatMessagePostEvent implements EventBaseInterface
{
    use Dispatchable;

    public function __construct(protected array $data)
    {
        //
    }

    public function getEventData(): array
    {
        return $this->data;
    }
}
