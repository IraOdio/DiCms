<?php


namespace App\Services\Shop\Events;


use App\Events\Interfaces\EventBaseInterface;
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
