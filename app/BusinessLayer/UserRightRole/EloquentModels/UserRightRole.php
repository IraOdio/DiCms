<?php


namespace App\BusinessLayer\UserRightRole\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRightRole extends Model
{
    use HasFactory;
    protected $table = 'user_right_role';
}
