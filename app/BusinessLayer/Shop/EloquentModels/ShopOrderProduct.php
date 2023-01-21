<?php


namespace App\BusinessLayer\Shop\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrderProduct extends Model
{
    use HasFactory;
    protected $table = 'shop_order_product_table';
}
