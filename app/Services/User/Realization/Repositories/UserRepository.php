<?php


namespace App\Services\User\Realization\Repositories;


use App\Services\User\Abstracted\UserRepositoryAbstracted;
use App\Services\User\EloquentModels\User;
use App\Services\User\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends UserRepositoryAbstracted implements UserRepositoryInterface
{

    protected function getModel(): Model
    {
        return new User();
    }

    public function findUserFromId(int $userId): array
    {
        return $this->startConditions()->activeUser()->find($userId)?->toArray() ?? [];
    }
}
