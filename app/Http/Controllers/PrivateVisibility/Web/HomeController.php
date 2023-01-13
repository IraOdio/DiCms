<?php


namespace App\Http\Controllers\PrivateVisibility\Web;


use App\Http\Controllers\Abstracted\WebController;


class HomeController extends WebController
{
    protected string $bar_label = "Home Controller";
    public function welcome(){
        $view = "private.adminka.welcome";

        return view($view);
    }
}
