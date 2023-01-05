<?php


namespace App\BussinessLayout\LocalizationLayout\Abstracted;


abstract class LocalizationAbstract
{
    abstract public function message(string $key) : string;
}
