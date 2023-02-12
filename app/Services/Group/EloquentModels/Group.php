<?php


namespace App\Services\Group\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Group\EloquentModels\Group
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @mixin \Eloquent
 */
class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
}
