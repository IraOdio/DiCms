<?php


namespace App\Services\Chat\Realization\Repositories;


use App\Services\Chat\Abstracted\ChatRepositoryAbstract;
use App\Services\Chat\EloquentModels\ChatMessagesUser;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesUserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ChatMessagesUserRepository extends ChatRepositoryAbstract implements ChatMessagesUserRepositoryInterface
{

    public function getModel(): Model
    {
        return new ChatMessagesUser;
    }

    public function create(array $data): int
    {
        $eloquent = $this->startConditions()->create($data);

        return $eloquent->id;
    }
}
