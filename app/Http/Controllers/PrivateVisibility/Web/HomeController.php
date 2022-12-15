<?php


namespace App\Http\Controllers\PrivateVisibility\Web;


use App\BussinessLayout\ZeroLayout\Service\DebugBar\DebugBarHelper;
use App\Http\Controllers\Abstracted\WebController;


class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome(){
        $view = "private.adminka." . config('app.env') . ".welcome";
        DebugBarHelper::addMessage("Hello World - Creator", $this->bar_label);
        DebugBarHelper::addMessage("View = " . $view, $this->bar_label);
        return view($view);
    }
}
