<?php


namespace App\BussinessLayout\UserLayout;


use App\CoreLayout\Component\Abstracted\ComponentAbstract;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserComponent extends ComponentAbstract
{
    public static function authorizeProcessAction(array $credentials) : User|null
    {
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if ($user instanceof User) Auth::login($user);

        return $user;
    }

    public static function registrationProcessAction(array $data) : void
    {
        $user = User::create($data);
        auth()->login($user);
    }

    public static function logoutProcessAction() : void
    {
        Session::flush();
        Auth::logout();
    }
}
