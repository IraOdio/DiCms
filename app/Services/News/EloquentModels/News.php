<?php


namespace App\Services\News\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\News\EloquentModels\News
 *
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @mixin \Eloquent
 */
class News extends Model
{
    use HasFactory;
    protected $table = 'news';

}
