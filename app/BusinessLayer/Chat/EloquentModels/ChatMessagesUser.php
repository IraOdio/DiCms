<?php


namespace App\BusinessLayer\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessagesUser extends Model
{
    use HasFactory;
    protected $table = 'chat_messages_user';
    protected $fillable = ['user_id','message_id'];
}
