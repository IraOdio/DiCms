<?php


namespace App\Services\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatDialogs extends Model
{
    use HasFactory;
    protected $table = 'chat_dialogs';
    protected $fillable = ['name'];
    protected $guarded = [];
}
