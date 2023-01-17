<?php


namespace App\BusinessLayer\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;
    protected $table = 'chat_messages';

    protected $fillable = ['content'];
}
