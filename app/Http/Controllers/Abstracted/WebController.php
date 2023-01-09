<?php


namespace App\Http\Controllers\Abstracted;


use App\CoreLayout\CoreComponent;
use App\CoreLayout\UI\UIHelper;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class WebController extends ControllerAbstract
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public string $ui = UIHelper::WEB_UI;
}
