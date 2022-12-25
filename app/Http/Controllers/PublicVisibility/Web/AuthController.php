<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\BussinessLayout\UserLayout\AuthLogic\Requests\LoginRequest;
use App\BussinessLayout\ZeroLayout\GodObject\GodObjectHelper;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends WebController
{
    protected string $bar_label = "Auth Controller";
    public function showAuthForm() : View
    {
        return view('public.auth.auth-form');
    }
    public function showAuthFailed() : View
    {
        return view('public.auth.auth-failed');
    }
    public function loginAction(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        GodObjectHelper::getLogger("auth/master.log")->info("Получен запрос на авторизацию",[
            'data' => $request->getCredentials()
        ]);

        if(!Auth::validate($credentials)) return to_route('auth-failed')->withErrors(trans('auth.failed'));

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return redirect()->intended();
    }
    /**
     * Handle response after user authenticated
     *
     * @param LoginRequest $request
     * @param  $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(LoginRequest $request,User $user) : \Illuminate\Http\RedirectResponse
    {
        return redirect()->intended();
    }
}
