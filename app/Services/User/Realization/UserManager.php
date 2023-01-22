<?php


namespace App\Services\User\Realization;


use App\Services\User\Abstracted\UserManagerAbstracted;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserManager extends UserManagerAbstracted
{

    public function createUser(array $userData): User
    {

        $user = new User();
        $user->name = $userData['name'];
        $user->email = $userData['email'];
        $user->username = $userData['username'];
        $user->password = $userData['password'];
        $user->save();

        return $user;
    }

    public function loginUser(User $user): void
    {
        // Event - src/Illuminate/Auth/Events/Login.php
       $this->authFactory->guard()->login($user);
    }


    public function attemptLoginUserWithCredentials(array $credentials): bool
    {
        return Auth::attempt($credentials);
    }
}
