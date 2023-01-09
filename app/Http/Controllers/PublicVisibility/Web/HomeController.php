<?php

namespace App\Http\Controllers\PublicVisibility\Web;
use App\CoreLayout\CoreComponent;
use App\CoreLayout\DebugBar\DebugBarHelper;
use App\Http\Controllers\Abstracted\WebController;
class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome(){
        $view = "public.welcome";
        CoreComponent::getDebugBarHelper()->addMessage("Hello World", $this->bar_label);
        return view($view);
    }
}
