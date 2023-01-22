<?php


namespace App\Services\Localization\Realization;


use App\Services\Localization\Abstracted\LocalizationAbstract;

class LocalizationMaster extends LocalizationAbstract
{
    public function message(string $key) : string
    {
        // TODO - In Work!!!
        return __($key);
    }
}
