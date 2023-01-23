<?php


namespace App\Repository\Abstracted;


use App\Repository\Interfaces\RepositoryBaseInterface;
use Illuminate\Database\Eloquent\Model;

abstract class RepositoryBaseAbstracted implements RepositoryBaseInterface
{
    protected Model $eloquentModel;
    public function __construct()
    {
        $this->eloquentModel = $this->getModel();
    }

    abstract protected function getModel() : Model;

    protected function startConditions() : Model
    {
        return clone $this->eloquentModel;
    }
}
