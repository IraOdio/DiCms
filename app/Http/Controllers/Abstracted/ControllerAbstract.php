<?php

namespace App\Http\Controllers\Abstracted;

use App\CoreLayout\UI\UIHelper;
use Illuminate\Routing\Controller as BaseController;

abstract class ControllerAbstract extends BaseController
{
    public string $ui = 'abstract';

    public function __construct()
    {
        config([UIHelper::NAME_KEY_CONFIG => $this->ui]);
    }
}
