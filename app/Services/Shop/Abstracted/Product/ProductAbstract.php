<?php


namespace App\Services\Shop\Abstracted\Product;


use App\DataTransferObject\DTOAbstract;
use App\Services\Shop\Interfaces\Product\ProductInterface;

abstract class ProductAbstract extends DTOAbstract implements ProductInterface
{
    public function __construct(
        public int $id,
        public string $name,
        public string $price,
        public mixed $created_at,
        public mixed $updated_at,
        public mixed $deleted_at
    )
    {
    }

}
