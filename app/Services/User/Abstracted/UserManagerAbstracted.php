<?php


namespace App\Services\User\Abstracted;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\User\Interfaces\UserManagerInterface;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Foundation\Auth\User;

abstract class UserManagerAbstracted implements UserManagerInterface
{
    protected LoggerAbstract $logger;
    public function __construct(LoggerAbstract $logger, protected AuthFactory $authFactory)
    {
        $this->logger = $logger->rebuildLogger('userManager/general.log');
    }

}
