<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\BussinessLayout\UserLayout\EloquentModels\User;
use App\BussinessLayout\UserLayout\Requests\RegistrationRequest;
use App\CoreLayout\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class RegistrationController extends WebController
{
    protected string $bar_label = "Registration Controller";

    public function __construct(LoggerAbstract $logger, DebugBarManagerAbstracted $debugBarManager, Redirector $redirector, ViewFactory $viewFactory)
    {
        parent::__construct($logger,  $debugBarManager, $redirector, $viewFactory);

    }

    public function showRegForm() : View
    {
        return view('public.registration.registration-form');
    }
    public function showSuccessViewAction() : View
    {
        return view('public.registration.success');
    }
    public function registrationAction(RegistrationRequest $request) : \Illuminate\Http\RedirectResponse
    {
        $this->logger->rebuildLogger("register/master.log")->debug('Получен запрос на регистрацию',[
            'data' => $request->validated(),
            'password' => $request->validated('password')
        ]);

        $user = \Illuminate\Foundation\Auth\User::create($request->validated());
        auth()->login($user);

        return to_route('registration-success');
    }


}
