<?php


namespace App\BusinessLayer\Messengers\Abstracted;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;

abstract class MessengerApiAbstracted
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }
}
