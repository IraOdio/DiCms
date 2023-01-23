<?php

namespace App\Http\Controllers\PublicVisibility\Web;

use App\Services\Chat\EloquentModels\ChatDialogs;
use App\Services\Shop\Realization\Product\Product;

use App\Services\Shop\Realization\Product\ProductCollection;
use App\Http\Controllers\Abstracted\WebController;

class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome(){
        $view = "public.welcome";
//        $data = (new ChatDialogs())->find(-1)?->toArray() ?? [];
//        dd($data);
        $this->debugBarManager->addMessage('Hello World!',$this->bar_label);
        return view($view);
    }
}
