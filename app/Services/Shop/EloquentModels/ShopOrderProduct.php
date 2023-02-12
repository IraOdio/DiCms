<?php


namespace App\Services\Shop\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Shop\EloquentModels\ShopOrderProduct
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderProduct query()
 * @mixin \Eloquent
 */
class ShopOrderProduct extends Model
{
    use HasFactory;
    protected $table = 'shop_order_product_table';
}
