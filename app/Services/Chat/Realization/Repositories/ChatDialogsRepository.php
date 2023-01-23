<?php


namespace App\Services\Chat\Realization\Repositories;


use App\Services\Chat\Abstracted\ChatRepositoryAbstract;
use App\Services\Chat\EloquentModels\ChatDialogs;
use App\Services\Chat\Interfaces\Repositories\ChatDialogsRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ChatDialogsRepository extends ChatRepositoryAbstract implements ChatDialogsRepositoryInterface
{

    protected function getModel(): Model
    {
        return new ChatDialogs();
    }

    public function findDialogFromId(int $dialogId): array
    {
        return $this->startConditions()->find($dialogId)?->toArray() ?? [];
    }
}
