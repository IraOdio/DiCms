<?php


namespace App\BusinessLayer\Localization\Abstracted;


abstract class LocalizationAbstract
{
    abstract public function message(string $key) : string;
}
