<?php

namespace App\Http\Controllers\PublicVisibility\Web;
use App\BussinessLayout\ZeroLayout\Service\DebugBar\DebugBarHelper;
use App\Http\Controllers\Abstracted\WebController;
class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome(){
        DebugBarHelper::addMessage("Hello World", $this->bar_label);
        return view('welcome');
    }
}
