<?php


namespace App\BusinessLayer\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatDialogsUser extends Model
{
    use HasFactory;
    protected $table = 'chat_dialogs_user';
}
