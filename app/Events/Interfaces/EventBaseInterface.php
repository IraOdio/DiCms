<?php


namespace App\Events\Interfaces;

/**
 * Интерфейс для своих ивентов
 * Interface EventBaseInterface
 * @package App\Services\Events\Interfaces
 */
interface EventBaseInterface
{
    public function getEventData() : array;

}
