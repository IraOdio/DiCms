<?php


namespace App\CoreLayout\DebugBar;
use App\CoreLayout\CoreComponent;
use Debugbar;
use Illuminate\Support\Facades\App;

class DebugBarHelper
{
    public function addMessage(mixed $message,string $label = 'Default Label')
    {
        if (!App::isProduction() && CoreComponent::getUIHelper()->isWebUI()){
            Debugbar::addMessage($message, $label);
        }
    }
}
