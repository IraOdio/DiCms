<?php


namespace App\Services\Chat\Realization\Repositories;


use App\Services\Chat\Abstracted\ChatRepositoryAbstract;
use App\Services\Chat\EloquentModels\ChatMessagesDialog;
use App\Services\Chat\Interfaces\Repositories\ChatMessagesDialogRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ChatMessagesDialogRepository extends ChatRepositoryAbstract implements ChatMessagesDialogRepositoryInterface
{

    protected function getModel(): Model
    {
        return new ChatMessagesDialog();
    }

    public function create(array $data): int
    {
        $eloquent = $this->startConditions()->create($data);

        return $eloquent->id;
    }
}
