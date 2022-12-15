<?php


namespace App\BussinessLayout\ZeroLayout\UI;


class ServiceHelperUI
{
    const NAME_KEY_CONFIG = 'ui';

    const WEB_UI = 'web';

    const API_UI = 'api';

    public static function isWebUI() : bool
    {
        return config(self::NAME_KEY_CONFIG) === self::WEB_UI;
    }

    public static function isApiUI() : bool
    {
        return config(self::NAME_KEY_CONFIG) === self::API_UI;
    }
}
