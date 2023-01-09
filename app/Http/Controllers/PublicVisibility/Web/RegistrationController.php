<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\BussinessLayout\UserLayout\EloquentModels\User;
use App\BussinessLayout\UserLayout\Requests\RegistrationRequest;
use App\BussinessLayout\UserLayout\UserComponent;
use App\CoreLayout\CoreComponent;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class RegistrationController extends WebController
{
    protected string $bar_label = "Registration Controller";
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
        CoreComponent::getLogger("register/master.log")->debug('Получен запрос на регистрацию',[
            'data' => $request->validated(),
            'password' => $request->validated('password')
        ]);
        UserComponent::registrationProcessAction($request->validated());

        return to_route('registration-success');
    }


}
