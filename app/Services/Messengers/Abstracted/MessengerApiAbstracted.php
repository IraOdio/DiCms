<?php


namespace App\Services\Messengers\Abstracted;


use App\Services\Logger\Abstracted\LoggerAbstract;

abstract class MessengerApiAbstracted
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }
}
