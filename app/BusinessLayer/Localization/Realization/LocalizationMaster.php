<?php


namespace App\BusinessLayer\Localization\Realization;


use App\BusinessLayer\Localization\Abstracted\LocalizationAbstract;

class LocalizationMaster extends LocalizationAbstract
{
    public function message(string $key) : string
    {
        // TODO - In Work!!!
        return __($key);
    }
}
