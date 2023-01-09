<?php


namespace App\CoreLayout;


use App\CoreLayout\Component\Abstracted\ComponentAbstract;
use App\CoreLayout\DebugBar\DebugBarHelper;
use App\CoreLayout\Logger\Abstracted\LoggerAbstract;
use App\CoreLayout\UI\UIHelper;
use Illuminate\Support\Facades\App;
use JetBrains\PhpStorm\Pure;

class CoreComponent extends ComponentAbstract
{
    public static function getLogger(string $pathFile = '') : LoggerAbstract
    {
        /** @var LoggerAbstract $logger */
        $logger = App::make(LoggerAbstract::class);
        return $logger($pathFile);
    }

    #[Pure] public static function getDebugBarHelper() : DebugBarHelper
    {
        return new DebugBarHelper();
    }

    #[Pure] public static function getUIHelper() : UIHelper
    {
        return new UIHelper();
    }
}
