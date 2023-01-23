<?php


namespace App\Services\User\Interfaces;


interface UserRepositoryInterface
{
    public function findUserFromId(int $userId) : array;
}
