<?php


namespace App\BusinessLayer\Shop\Abstracted\ShopManager;


use App\BaseLayer\Logger\Abstracted\LoggerAbstract;
use App\BusinessLayer\Shop\Interfaces\ShopManager\ShopManagerInterface;

abstract class ShopManagerAbstract implements ShopManagerInterface
{
    public function __construct(protected LoggerAbstract $logger)
    {
    }
}
