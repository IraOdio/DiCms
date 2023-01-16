<?php


namespace App\BusinessLayer\User\Abstracted;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Foundation\Auth\User;

abstract class UserManagerAbstracted
{
    protected LoggerAbstract $logger;
    public function __construct(LoggerAbstract $logger, protected AuthFactory $authFactory)
    {
        $this->logger = $logger->rebuildLogger('userManager/general.log');
    }

    /**
     * Создает (регистрирует) пользователя, возвращает его Eloquent Model
     * @param array $userData
     * @return int
     */
    abstract public function createUser(array $userData) : User;

    /**
     * Авторизует пользователля по Eloquent-модели
     * @param User $user
     */
    abstract public function loginUser(User $user) : void;

    /**
     * Пытается авторизовать пользователя по реквизитам, обёртка над интерфейсов Illuminate\Contracts\Auth\StatefulGuard
     * @param array $credentials
     * @return bool
     */
    abstract public function attemptLoginUserWithCredentials(array $credentials) : bool;

}
