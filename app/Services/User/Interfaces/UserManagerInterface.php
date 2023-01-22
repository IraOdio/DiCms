<?php


namespace App\Services\User\Interfaces;


use Illuminate\Foundation\Auth\User;

interface UserManagerInterface
{
    /**
     * Создает (регистрирует) пользователя, возвращает его Eloquent Model
     * @param array $userData
     * @return int
     */
     public function createUser(array $userData) : User;

    /**
     * Авторизует пользователля по Eloquent-модели
     * @param User $user
     */
     public function loginUser(User $user) : void;

    /**
     * Пытается авторизовать пользователя по реквизитам, обёртка над интерфейсов Illuminate\Contracts\Auth\StatefulGuard
     * @param array $credentials
     * @return bool
     */
     public function attemptLoginUserWithCredentials(array $credentials) : bool;
}
