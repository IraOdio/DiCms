<?php

namespace App\Http\Controllers\Abstracted;

use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\CoreLayout\UIManager\Abstracted\UIManagerAbstracted;
use Illuminate\Routing\Controller as BaseController;

abstract class ControllerAbstract extends BaseController
{
    protected string $ui = 'abstract';

    public function __construct(protected LoggerAbstract $logger)
    {
        config([UIManagerAbstracted::NAME_KEY_CONFIG => $this->ui]);
    }
}
