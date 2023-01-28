<?php


namespace App\Services\Blog\Repositories\Eloquent;


use App\Repository\Abstracted\RepositoryBaseAbstracted;
use App\Services\Blog\Abstracted\Post\PostAbstract;
use App\Services\Blog\EloquentModels\PostEloquentModel;
use App\Services\Blog\Interfaces\Repositories\BlogPostRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BlogPostRepositoryElo extends RepositoryBaseAbstracted implements BlogPostRepositoryInterface
{
    public function findPostById(int $id) : array
    {
        return $this->startConditions()->find($id)?->toArray() ?? [];
    }

    public function getAllPosts() : Collection
    {
        return $this->startConditions()->all();
    }

    protected function getModel(): Model
    {
        return new PostEloquentModel();
    }
}
