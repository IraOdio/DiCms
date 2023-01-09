<?php


namespace App\CoreLayout\UI;


class UIHelper
{
    const NAME_KEY_CONFIG = 'ui';

    const WEB_UI = 'web';

    const API_UI = 'api';

    public function isWebUI() : bool
    {
        return config(self::NAME_KEY_CONFIG) === self::WEB_UI;
    }

    public function isApiUI() : bool
    {
        return config(self::NAME_KEY_CONFIG) === self::API_UI;
    }
}
