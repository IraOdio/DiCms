<?php


namespace App\Services\Shop\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProducts extends Model
{
    use HasFactory;
    protected $table = 'shop_products_table';
}
