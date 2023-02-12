<?php


namespace App\Services\Chat\EloquentModels;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Chat\EloquentModels\ChatDialogs
 *
 * @method static Builder|ChatDialogs activeDialog()
 * @method static \Database\Factories\Services\Chat\EloquentModels\ChatDialogsFactory factory(...$parameters)
 * @method static Builder|ChatDialogs newModelQuery()
 * @method static Builder|ChatDialogs newQuery()
 * @method static Builder|ChatDialogs query()
 * @mixin \Eloquent
 */
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
