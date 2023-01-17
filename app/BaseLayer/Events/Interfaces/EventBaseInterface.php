<?php


namespace App\BaseLayer\Events\Interfaces;

/**
 * Интерфейс для своих ивентов
 * Interface EventBaseInterface
 * @package App\BaseLayer\Events\Interfaces
 */
interface EventBaseInterface
{
    public function getEventData() : array;

}
