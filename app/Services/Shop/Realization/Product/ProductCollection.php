<?php


namespace App\Services\Shop\Realization\Product;


use App\Services\Shop\Interfaces\Product\ProductCollectionInterface;
use App\Services\Shop\Interfaces\Product\ProductInterface;
use Exception;
use Traversable;

class ProductCollection implements ProductCollectionInterface
{
    /**
     * @var ProductInterface[]
     */
    protected array $products = [];

    public function __construct(ProductInterface ...$products)
    {
        $this->products = $products;
    }

    public function addProduct(ProductInterface $Product): void
    {
        $this->products[] = $Product;
    }

    /**
     * @return \ArrayIterator|ProductInterface[]
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->products);
    }
}
