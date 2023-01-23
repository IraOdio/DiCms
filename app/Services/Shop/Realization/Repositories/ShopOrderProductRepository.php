<?php


namespace App\Services\Shop\Realization\Repositories;


use App\Services\Shop\Abstracted\Repositories\ShopRepositoryAbstract;
use App\Services\Shop\EloquentModels\ShopOrderProduct;
use App\Services\Shop\Interfaces\Repositories\ShopOrderProductRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ShopOrderProductRepository extends ShopRepositoryAbstract implements ShopOrderProductRepositoryInterface
{

    protected function getModel(): Model
    {
        return new ShopOrderProduct();
    }
}
