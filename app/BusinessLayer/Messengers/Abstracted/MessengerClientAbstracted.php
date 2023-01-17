<?php


namespace App\BusinessLayer\Messengers\Abstracted;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;

abstract class MessengerClientAbstracted
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }
}
