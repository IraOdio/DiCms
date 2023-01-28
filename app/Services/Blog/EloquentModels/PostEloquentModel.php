<?php


namespace App\Services\Blog\EloquentModels;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostEloquentModel
 * @property int $id - ид поста
 * @property string $title - тайтл поста
 * @property string $short_content_raw - короткий контект поста
 * @property string $content_raw - основной контент поста
 * @property Carbon $created_at - время создания записи
 * @package App\Services\Blog\EloquentModels
 */
class PostEloquentModel extends Model
{
    use HasFactory;
    protected $table = 'blog_post';
}
