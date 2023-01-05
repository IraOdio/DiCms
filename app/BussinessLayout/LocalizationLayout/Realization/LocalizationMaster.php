<?php


namespace App\BussinessLayout\LocalizationLayout\Realization;


use App\BussinessLayout\LocalizationLayout\Abstracted\LocalizationAbstract;

class LocalizationMaster extends LocalizationAbstract
{
    public function message(string $key) : string
    {
        // TODO - In Work!!!
        return __($key);
    }
}
