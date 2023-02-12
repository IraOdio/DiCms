<?php


namespace App\Services\Blog\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Blog\EloquentModels\CommentEloquentModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CommentEloquentModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentEloquentModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentEloquentModel query()
 * @mixin \Eloquent
 */
class CommentEloquentModel extends Model
{
    use HasFactory;
    protected $table = 'blog_comment';
}

