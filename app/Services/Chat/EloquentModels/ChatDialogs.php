<?php


namespace App\Services\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatDialogs extends Model
{
    use HasFactory;
    protected $table = 'chat_dialogs';
    protected $fillable = ['name'];
    protected $guarded = [];

    public function scopeActiveDialog(Builder $query) : Builder
    {
        return $query->where('deleted_at','=',null); // диалог считается активным, если поле deleted_at содержит значение null
    }
}
