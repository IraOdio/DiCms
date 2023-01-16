<?php


namespace App\BusinessLayer\User\Realization;


use App\BusinessLayer\User\Abstracted\UserManagerAbstracted;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

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
       $this->authFactory->guard()->login($user);
    }
}
