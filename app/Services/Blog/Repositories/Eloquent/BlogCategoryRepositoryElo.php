<?php


namespace App\Services\Blog\Repositories\Eloquent;


use App\Repository\Abstracted\RepositoryBaseAbstracted;
use App\Services\Blog\EloquentModels\CategoryEloquentModel;
use App\Services\Blog\Interfaces\Repositories\BlogCategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BlogCategoryRepositoryElo extends RepositoryBaseAbstracted implements BlogCategoryRepositoryInterface
{

    protected function getModel(): Model
    {
        return new CategoryEloquentModel();
    }
}
