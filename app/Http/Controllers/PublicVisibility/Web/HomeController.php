<?php

namespace App\Http\Controllers\PublicVisibility\Web;

use App\Services\Chat\EloquentModels\ChatDialogs;
use App\Services\Shop\Realization\Product\Product;

use App\Services\Shop\Realization\Product\ProductCollection;
use App\Http\Controllers\Abstracted\WebController;
use Illuminate\View\View;

class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome() : View
    {
        $view = "public.welcome";
        $data = (new ChatDialogs())->find(1);
        dump($data->created_at);
        $this->debugBarManager->addMessage('Hello World!',$this->bar_label);
        return view($view);
    }
}
