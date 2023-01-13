<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\CoreLayout\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ChatController extends WebController
{
    public function __construct(LoggerAbstract $logger, DebugBarManagerAbstracted $debugBarManager, Redirector $redirector, ViewFactory $viewFactory)
    {
        parent::__construct($logger, $debugBarManager,$redirector,$viewFactory);
    }

    public function showChatView() : View
    {
        return view('public.lk.chat.chat-master');
    }
}
