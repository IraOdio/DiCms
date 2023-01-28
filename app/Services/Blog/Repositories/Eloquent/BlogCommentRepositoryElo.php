<?php


namespace App\Services\Blog\Repositories\Eloquent;


use App\Repository\Abstracted\RepositoryBaseAbstracted;
use App\Services\Blog\EloquentModels\CommentEloquentModel;
use App\Services\Blog\Interfaces\Repositories\BlogCommentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BlogCommentRepositoryElo extends RepositoryBaseAbstracted implements BlogCommentRepositoryInterface
{

    protected function getModel(): Model
    {
        return new CommentEloquentModel();
    }
}
