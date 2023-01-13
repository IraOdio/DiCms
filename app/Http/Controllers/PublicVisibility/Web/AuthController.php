<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\BussinessLayout\UserLayout\Requests\LoginRequest;

use App\CoreLayout\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Routing\UrlGenerator as UrlGeneratorContract;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthController extends WebController
{
    protected string $bar_label = "Auth Controller";

    public function __construct(
        DebugBarManagerAbstracted $debugBarManager,
        LoggerAbstract $logger,
        Redirector $redirector,
        ViewFactory $viewFactory
    )
    {
        parent::__construct($logger,$debugBarManager, $redirector, $viewFactory);
    }

    public function showAuthForm(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->debugBarManager->addMessage("Пользователь авторизован!",$this->bar_label);
        } else {
            $this->debugBarManager->addMessage('Пользователь не авторизован!',$this->bar_label);
        }
        return $this->viewFactory->make('public.auth.auth-form');
    }

    public function showAuthFailed(): View
    {
        return $this->viewFactory->make('public.auth.auth-failed');
    }

    public function loginAction(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->getCredentials();
        $this->logger->rebuildLogger("auth/master.log")->info("Получен запрос на авторизацию", [
            'data' => $request->getCredentials()
        ]);

        if (!Auth::validate($credentials)) {
            return $this->redirector->route('auth-failed-view')->withErrors(trans('auth.failed'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if ($user instanceof User) Auth::login($user);

        return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     *
     * @param LoginRequest $request
     * @param  $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(LoginRequest $request, User $user): \Illuminate\Http\RedirectResponse
    {
        return $this->redirector->route('lk-view');
    }
}
