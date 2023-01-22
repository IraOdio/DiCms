<?php


namespace App\Http\Controllers\PublicVisibility\Web\Lk;


use App\Services\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LkController extends WebController
{
    protected string $bar_label = 'Lk Web Controller';

    public function __construct(DebugBarManagerAbstracted $debugBarManager, LoggerAbstract $logger, Redirector $redirector, ViewFactory $viewFactory)
    {
        parent::__construct($logger,$debugBarManager, $redirector,  $viewFactory);
    }

    public function logoutAction() : \Illuminate\Http\RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return $this->redirector->route('auth-form-view');
    }

    public function showLkView() : View
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->debugBarManager->addMessage("Пользователь авторизован!",$this->bar_label);
        } else {
            $this->debugBarManager->addMessage('Пользователь не авторизован!',$this->bar_label);
        }
        return $this->viewFactory->make('public.lk.lk-master');
    }
}
