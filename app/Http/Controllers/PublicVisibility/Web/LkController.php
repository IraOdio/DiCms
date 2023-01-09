<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\CoreLayout\CoreComponent;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LkController extends WebController
{
    protected string $bar_label = 'Lk Web Controller';
    public function logoutAction() : \Illuminate\Http\RedirectResponse
    {
        Session::flush();

        Auth::logout();

        return to_route('logout-message-view');
    }
    public function showLogoutView() : View
    {
        if (Auth::check()) {
            $user = Auth::user();
            CoreComponent::getDebugBarHelper()->addMessage("Пользователь авторизован!",$this->bar_label);
        } else {
            CoreComponent::getDebugBarHelper()->addMessage('Пользователь не авторизован!',$this->bar_label);
        }
        return view('public.lk.logout.logout-message');
    }

    public function showLkView() : View
    {
        if (Auth::check()) {
            $user = Auth::user();
            CoreComponent::getDebugBarHelper()->addMessage("Пользователь авторизован!",$this->bar_label);
        } else {
            CoreComponent::getDebugBarHelper()->addMessage('Пользователь не авторизован!',$this->bar_label);
        }
        return view('public.lk.lk-master');
    }
}
