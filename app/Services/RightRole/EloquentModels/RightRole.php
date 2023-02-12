<?php


namespace App\Services\RightRole\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\RightRole\EloquentModels\RightRole
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RightRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RightRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RightRole query()
 * @mixin \Eloquent
 */
class RightRole extends Model
{
    use HasFactory;

    protected $table = 'right_roles';
}
