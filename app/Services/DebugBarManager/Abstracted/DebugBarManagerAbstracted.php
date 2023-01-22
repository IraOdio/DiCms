<?php


namespace App\Services\DebugBarManager\Abstracted;


abstract class DebugBarManagerAbstracted
{
    abstract public function addMessage(mixed $message,string $label = 'Default Label');
}
