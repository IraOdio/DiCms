<?php


namespace App\Services\Shop\Abstracted\ShopManager;


use App\Services\Logger\Abstracted\LoggerAbstract;
use App\Services\Shop\Interfaces\ShopManager\ShopManagerInterface;

abstract class ShopManagerAbstract implements ShopManagerInterface
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }
}
