<?php


namespace App\CoreLayout\DebugBarManager\Realization;


use App\CoreLayout\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\CoreLayout\UIManager\Abstracted\UIManagerAbstracted;
use Debugbar;
use Illuminate\Support\Facades\App;

class DebugBarManager extends DebugBarManagerAbstracted
{
    protected UIManagerAbstracted $UIManager;

    public function __construct(UIManagerAbstracted $UIManager)
    {
        $this->UIManager = $UIManager;
    }

    public function addMessage(mixed $message,string $label = 'Default Label'){
        if (!App::isProduction() && $this->UIManager->isWebUI()){
            Debugbar::addMessage($message, $label);
        }
    }
}
