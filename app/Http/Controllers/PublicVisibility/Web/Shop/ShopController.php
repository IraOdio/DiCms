<?php


namespace App\Http\Controllers\PublicVisibility\Web\Shop;


use App\Services\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\Services\Logger\Abstracted\LoggerAbstract;

use App\Http\Controllers\Abstracted\WebController;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerOrderInterface;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerProductInterface;
use App\Services\Shop\Requests\AddProductToOrderRequest;
use App\Services\Shop\Requests\ProductCreateRequest;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ShopController extends WebController
{
    protected string $bar_label = 'Shop Web Controller';

    public function __construct(LoggerAbstract $logger,
                                DebugBarManagerAbstracted $debugBarManager,
                                Redirector $redirector,
                                ViewFactory $viewFactory,
                                private ShopManagerProductInterface $shopManagerProduct,
                                private ShopManagerOrderInterface $shopManagerOrder
    )
    {
        parent::__construct($logger, $debugBarManager, $redirector, $viewFactory);

    }

    public function createProductAction(ProductCreateRequest $request)
    {
        $data = $request->getProductData();
        $this->shopManagerProduct->createProduct($data);
        // TODO - Make response
    }

    public function addProductToOrderAction(AddProductToOrderRequest $request)
    {
        $product = $request->getProduct();
        $result = $this->shopManagerOrder->addProductToOrder($product);

    }

}
