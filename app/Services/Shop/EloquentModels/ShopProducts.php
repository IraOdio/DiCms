<?php


namespace App\Services\Shop\EloquentModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Services\Shop\EloquentModels\ShopProducts
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProducts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProducts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProducts query()
 * @mixin \Eloquent
 */
class ShopProducts extends Model
{
    use HasFactory;
    protected $table = 'shop_products_table';
}
