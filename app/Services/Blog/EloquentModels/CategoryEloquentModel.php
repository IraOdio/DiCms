<?php


namespace App\Services\Blog\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryEloquentModel extends Model
{
    use HasFactory;
    protected $table = 'blog_category';
}
