<?php


namespace App\Services\Shop\Events;


use App\Events\Interfaces\EventBaseInterface;
use App\Services\Shop\Abstracted\Product\ProductAbstract;
use App\Services\Shop\Realization\Product\Product;
use Illuminate\Foundation\Events\Dispatchable;

class onAfterCreateProduct implements EventBaseInterface
{
    use Dispatchable;

    public function __construct(private ProductAbstract $product)
    {
    }


    public function getEventData(): array
    {
        return [];
    }
}
