<?php

namespace App\Http\Controllers\PublicVisibility\Web;

use App\BusinessLayer\Shop\Realization\Product\Product;

use App\BusinessLayer\Shop\Realization\Product\ProductCollection;
use App\Http\Controllers\Abstracted\WebController;

class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome(){
        $view = "public.welcome";

        $this->debugBarManager->addMessage('Hello World!',$this->bar_label);
        return view($view);
    }
}
