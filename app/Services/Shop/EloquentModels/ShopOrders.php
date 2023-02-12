<?php


namespace App\Services\Shop\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Shop\EloquentModels\ShopOrders
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrders query()
 * @mixin \Eloquent
 */
class ShopOrders extends Model
{
    use HasFactory;
    protected $table = 'shop_orders_table';
}
