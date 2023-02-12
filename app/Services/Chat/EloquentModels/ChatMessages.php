<?php


namespace App\Services\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Chat\EloquentModels\ChatMessages
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages query()
 * @mixin \Eloquent
 */
class ChatMessages extends Model
{
    use HasFactory;
    protected $table = 'chat_messages';

    protected $fillable = ['content'];
}
