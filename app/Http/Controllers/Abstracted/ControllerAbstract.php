<?php

namespace App\Http\Controllers\Abstracted;

use App\BussinessLayout\ZeroLayout\UI\ServiceHelperUI;
use Illuminate\Routing\Controller as BaseController;

abstract class ControllerAbstract extends BaseController
{
    public string $ui = 'abstract';

    public function __construct()
    {
        config([ServiceHelperUI::NAME_KEY_CONFIG => $this->ui]);
    }
}
