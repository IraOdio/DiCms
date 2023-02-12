<?php


namespace App\Services\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Chat\EloquentModels\ChatMessagesDialog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessagesDialog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessagesDialog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessagesDialog query()
 * @mixin \Eloquent
 */
class ChatMessagesDialog extends Model
{
    use HasFactory;
    protected $table = 'chat_messages_dialog';
    protected $fillable = ['message_id','dialog_id'];
}
