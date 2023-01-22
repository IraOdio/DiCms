<?php


namespace App\Services\UIManager\Realization;


use App\Services\UIManager\Abstracted\UIManagerAbstracted;

class UIManager extends UIManagerAbstracted
{
    public function isWebUI() : bool
    {
        return config(self::NAME_KEY_CONFIG) === self::WEB_UI;
    }

    public function isApiUI() : bool
    {
        return config(self::NAME_KEY_CONFIG) === self::API_UI;
    }
}
