<?php


namespace App\Services\GroupRightRole\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\GroupRightRole\EloquentModels\GroupRightRole
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GroupRightRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupRightRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupRightRole query()
 * @mixin \Eloquent
 */
class GroupRightRole extends Model
{
    use HasFactory;
    protected $table = 'group_right_role';
}
