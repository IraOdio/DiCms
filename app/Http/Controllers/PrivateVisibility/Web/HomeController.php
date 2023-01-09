<?php


namespace App\Http\Controllers\PrivateVisibility\Web;


use App\CoreLayout\CoreComponent;
use App\Http\Controllers\Abstracted\WebController;


class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome(){
        $view = "private.adminka.welcome";
        CoreComponent::getDebugBarHelper()->addMessage("Hello World - Creator", $this->bar_label);
        CoreComponent::getDebugBarHelper()->addMessage("View = " . $view, $this->bar_label);
        return view($view);
    }
}
