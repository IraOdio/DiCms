<?php


namespace App\BussinessLayout\ChatLayout\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;
    protected $table = 'chat_messages';
}
