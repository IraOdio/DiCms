<?php


namespace App\BussinessLayout\ZeroLayout\DebugBar;
use App\BussinessLayout\ZeroLayout\UI\ServiceHelperUI;
use Debugbar;
use Illuminate\Support\Facades\App;

class DebugBarHelper
{
    public static function addMessage(mixed $message,string $label = 'Default Label')
    {
        if (!App::isProduction() && ServiceHelperUI::isWebUI()){
            Debugbar::addMessage($message, $label);
        }
    }
}
