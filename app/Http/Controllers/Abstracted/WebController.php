<?php


namespace App\Http\Controllers\Abstracted;


use App\CoreLayout\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\CoreLayout\DebugBarManager\Realization\DebugBarManager;
use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\CoreLayout\UIManager\Abstracted\UIManagerAbstracted;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\Factory as ViewFactory;

abstract class WebController extends ControllerAbstract
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected string $ui = UIManagerAbstracted::WEB_UI;

    public function __construct(
        LoggerAbstract $logger,
        protected DebugBarManagerAbstracted $debugBarManager,
        protected Redirector $redirector,
        protected ViewFactory $viewFactory)
    {
        parent::__construct($logger);
    }

}
