<?php


namespace App\Http\Controllers\PublicVisibility\Web\Shop;


use App\BaseLayer\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Shop\Abstracted\ShopManager\ShopManagerAbstract;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Routing\Redirector;

class ShopController extends WebController
{
    protected string $bar_label = 'Shop Web Controller';

    public function __construct(LoggerAbstract $logger,
                                DebugBarManagerAbstracted $debugBarManager,
                                Redirector $redirector,
                                ViewFactory $viewFactory,
                                protected ShopManagerAbstract $shopManager
    )
    {
        parent::__construct($logger, $debugBarManager, $redirector, $viewFactory);

    }
}
