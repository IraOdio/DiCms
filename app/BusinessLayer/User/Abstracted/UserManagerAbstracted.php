<?php


namespace App\BusinessLayer\User\Abstracted;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
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

    abstract public function loginUser(User $user) : void;
}
