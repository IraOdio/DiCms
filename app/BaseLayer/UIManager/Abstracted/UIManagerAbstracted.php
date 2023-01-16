<?php


namespace App\BaseLayer\UIManager\Abstracted;


abstract class UIManagerAbstracted
{
    const NAME_KEY_CONFIG = 'ui';

    const WEB_UI = 'web';

    const API_UI = 'api';

    abstract public function isWebUI() : bool;

    abstract public function isApiUI() : bool;
}
