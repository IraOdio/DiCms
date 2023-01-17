<?php


namespace App\BusinessLayer\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessagesDialog extends Model
{
    use HasFactory;
    protected $table = 'chat_messages_dialog';
    protected $fillable = ['message_id','dialog_id'];
}
