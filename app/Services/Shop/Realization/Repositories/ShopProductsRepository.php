<?php


namespace App\Services\Shop\Realization\Repositories;


use App\Services\Shop\Abstracted\Repositories\ShopRepositoryAbstract;
use App\Services\Shop\EloquentModels\ShopProducts;
use App\Services\Shop\Interfaces\Repositories\ShopProductsRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ShopProductsRepository extends ShopRepositoryAbstract implements ShopProductsRepositoryInterface
{

    protected function getModel(): Model
    {
        return new ShopProducts();
    }

    public function create(array $data): array
    {
        // TODO: Implement create() method.
    }
}
