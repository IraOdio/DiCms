<?php


namespace App\Services\Localization\Abstracted;


abstract class LocalizationAbstract
{
    abstract public function message(string $key) : string;
}
