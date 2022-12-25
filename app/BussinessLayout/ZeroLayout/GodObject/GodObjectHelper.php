<?php


namespace App\BussinessLayout\ZeroLayout\GodObject;


use App\BussinessLayout\ZeroLayout\Logger\Abstracted\AbstractLogger;
use Illuminate\Support\Facades\App;

class GodObjectHelper
{
    public static function getLogger(string $pathFile = '') : AbstractLogger
    {
        /** @var AbstractLogger $logger */
        $logger = App::make(AbstractLogger::class);
        return $logger($pathFile);
    }
}
