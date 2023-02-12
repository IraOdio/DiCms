<?php

namespace App\Http\Controllers\PublicVisibility\Web;

use App\Services\Chat\EloquentModels\ChatDialogs;
use App\Services\Shop\Realization\Product\Product;
use App\Services\Shop\Realization\Product\ProductCollection;
use App\Http\Controllers\Abstracted\WebController;
use App\Services\User\EloquentModels\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\Grammar;
use Illuminate\Database\Schema\Grammars\PostgresGrammar;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome() : View
    {
        $view = "public.welcome";

        //$this->debugBarManager->addMessage('Hello World!',$this->bar_label);
        return view($view);
    }


}
