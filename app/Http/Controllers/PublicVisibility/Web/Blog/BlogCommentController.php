<?php


namespace App\Http\Controllers\PublicVisibility\Web\Blog;

use App\Http\Controllers\Abstracted\WebController;
use App\Services\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\Services\Logger\Abstracted\LoggerAbstract;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Routing\Redirector;

class BlogCommentController extends WebController
{
    protected string $bar_label = 'Public Web Controller';
    public function __construct(LoggerAbstract $logger,
                                DebugBarManagerAbstracted $debugBarManager,
                                Redirector $redirector,
                                ViewFactory $viewFactory)
    {
        parent::__construct($logger, $debugBarManager, $redirector, $viewFactory);
    }
}
