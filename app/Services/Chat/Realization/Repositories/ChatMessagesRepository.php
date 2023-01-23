<?php


namespace App\Services\Chat\Realization\Repositories;


use App\Services\Chat\Abstracted\ChatRepositoryAbstract;
use App\Services\Chat\EloquentModels\ChatMessages;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ChatMessagesRepository extends ChatRepositoryAbstract implements ChatMessagesRepositoryInterface
{
    protected function getModel(): Model
    {
        return new ChatMessages();
    }

    public function create(array $data): int
    {
        $eloquent = $this->startConditions()->create($data);

        return $eloquent->id;
    }
}
