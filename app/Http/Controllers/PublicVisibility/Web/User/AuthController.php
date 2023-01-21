<?php


namespace App\Http\Controllers\PublicVisibility\Web\User;


use App\BusinessLayer\User\Interfaces\UserManagerInterface;
use App\BusinessLayer\User\Requests\LoginRequest;
use App\BaseLayer\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
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
        ViewFactory $viewFactory,
        protected UserManagerInterface $userManager
    )
    {
        parent::__construct($logger, $debugBarManager, $redirector, $viewFactory);
    }

    public function showAuthForm(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->debugBarManager->addMessage("Пользователь авторизован!", $this->bar_label);
        } else {
            $this->debugBarManager->addMessage('Пользователь не авторизован!', $this->bar_label);
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

        $attemptResult = $this->userManager->attemptLoginUserWithCredentials($credentials);

        return $this->authenticated($request);
    }

    /**
     * Handle response after user authenticated
     *
     * @param LoginRequest $request
     *
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        return $this->redirector->route('lk-view');
    }
}
