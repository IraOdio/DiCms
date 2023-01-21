<?php


namespace App\BusinessLayer\Shop\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrders extends Model
{
    use HasFactory;
    protected $table = 'shop_orders_table';
}
