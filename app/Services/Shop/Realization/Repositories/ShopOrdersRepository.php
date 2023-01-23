<?php


namespace App\Services\Shop\Realization\Repositories;


use App\Services\Shop\Abstracted\Repositories\ShopRepositoryAbstract;
use App\Services\Shop\EloquentModels\ShopOrders;
use App\Services\Shop\Interfaces\Repositories\ShopOrdersRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ShopOrdersRepository extends ShopRepositoryAbstract implements ShopOrdersRepositoryInterface
{

    protected function getModel(): Model
    {
        return new ShopOrders();
    }
}
