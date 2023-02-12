<?php


namespace App\Services\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Chat\EloquentModels\ChatDialogsUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ChatDialogsUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatDialogsUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatDialogsUser query()
 * @mixin \Eloquent
 */
class ChatDialogsUser extends Model
{
    use HasFactory;
    protected $table = 'chat_dialogs_user';
}
