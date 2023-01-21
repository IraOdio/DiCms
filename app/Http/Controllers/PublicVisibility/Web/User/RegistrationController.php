<?php


namespace App\Http\Controllers\PublicVisibility\Web\User;


use App\BusinessLayer\User\Interfaces\UserManagerInterface;
use App\BusinessLayer\User\Requests\RegistrationRequest;
use App\BaseLayer\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\User;

class RegistrationController extends WebController
{
    protected string $bar_label = "Registration Controller";

    public function __construct(LoggerAbstract $logger,
                                DebugBarManagerAbstracted $debugBarManager,
                                Redirector $redirector,
                                ViewFactory $viewFactory,
                                protected UserManagerInterface $userManager)
    {
        parent::__construct($logger,  $debugBarManager, $redirector, $viewFactory);

    }

    public function showRegForm() : View
    {
        return $this->viewFactory->make('public.registration.registration-form');
    }
    public function showSuccessViewAction() : View
    {
        return $this->viewFactory->make('public.registration.success');
    }
    public function registrationAction(RegistrationRequest $request) : \Illuminate\Http\RedirectResponse
    {
        $this->logger->rebuildLogger("register/master.log")->debug('Получен запрос на регистрацию',[
            'data' => $request->validated(),
            'password' => $request->validated('password')
        ]);

        $userData = [];
        $userData['name'] = $request->validated('name');
        $userData['email'] = $request->validated('email');
        $userData['username'] = $request->validated('username');
        $userData['password'] = $request->validated('password');
        $user = $this->userManager->createUser($userData);
        $this->userManager->loginUser($user);


        return to_route('registration-success-view');
    }


}
