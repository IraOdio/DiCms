<?php


namespace App\Services\Chat\Realization\Repositories;


use App\Services\Chat\Abstracted\ChatRepositoryAbstract;
use App\Services\Chat\EloquentModels\ChatDialogsUser;
use App\Services\Chat\Interfaces\Repositories\ChatDialogsUserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ChatDialogsUserRepository extends ChatRepositoryAbstract implements ChatDialogsUserRepositoryInterface
{

    protected function getModel(): Model
    {
        return new ChatDialogsUser();
    }
}
