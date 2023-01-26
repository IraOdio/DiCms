<?php


namespace App\Services\Shop\Realization\ShopManager;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Shop\Abstracted\ShopManager\ShopManagerAbstract;
use App\Services\Shop\Events\onAfterCreateProduct;
use App\Services\Shop\Interfaces\Product\ProductCollectionInterface;
use App\Services\Shop\Interfaces\Product\ProductInterface;
use App\Services\Shop\Interfaces\Repositories\ShopProductsRepositoryInterface;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerProductInterface;
use App\Services\Shop\Realization\Product\Product;
use JetBrains\PhpStorm\Pure;

class ShopManagerProduct extends ShopManagerAbstract implements ShopManagerProductInterface
{
    #[Pure] public function __construct(
        LoggerAbstract $logger,
        private ShopProductsRepositoryInterface $shopProductsRepository
    )
    {
        parent::__construct($logger);
    }

    public function createProduct(array $data) : ProductInterface
    {
        $newProductData = $this->shopProductsRepository->create($data);
        $productId = $newProductData['id'];
        $productName = $newProductData['name'];
        $productPrice = $newProductData['price'];
        $productCreatedAt = $newProductData['created_at'];
        $productUpdatedAt = $newProductData['updated_at'];
        $productDeletedAt = $newProductData['deleted_at'];
        $productInstance = new Product($productId,$productName,$productPrice,$productCreatedAt,$productUpdatedAt,$productDeletedAt);
        onAfterCreateProduct::dispatch($productInstance);
        return $productInstance;
    }

    public function getProductById(int $id): ProductInterface
    {
        // TODO: Implement getProductById() method.
    }

    public function getProducts(array $filter = []): ProductCollectionInterface
    {
        // TODO: Implement getProducts() method.
    }

    public function updateProductById(int $id, array $data = []): ProductInterface
    {
        // TODO: Implement updateProductById() method.
    }
}
