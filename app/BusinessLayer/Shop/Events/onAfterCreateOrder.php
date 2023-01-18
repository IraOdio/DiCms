<?php


namespace App\BusinessLayer\Shop\Events;


use App\BaseLayer\Events\Interfaces\EventBaseInterface;
use Illuminate\Foundation\Events\Dispatchable;

class onAfterCreateOrder implements EventBaseInterface
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
