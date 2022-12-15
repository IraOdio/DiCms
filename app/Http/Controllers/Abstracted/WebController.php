<?php


namespace App\Http\Controllers\Abstracted;


use App\BussinessLayout\ZeroLayout\UI\ServiceHelperUI;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class WebController extends AbstractController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public string $ui = ServiceHelperUI::WEB_UI;
}
