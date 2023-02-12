<?php


namespace App\Services\Blog\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Blog\EloquentModels\CategoryEloquentModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryEloquentModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryEloquentModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryEloquentModel query()
 * @mixin \Eloquent
 */
class CategoryEloquentModel extends Model
{
    use HasFactory;
    protected $table = 'blog_category';
}
