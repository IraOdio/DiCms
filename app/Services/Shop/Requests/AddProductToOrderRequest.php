<?php


namespace App\Services\Shop\Requests;


use App\Services\Shop\Interfaces\Product\ProductInterface;
use Illuminate\Foundation\Http\FormRequest;

class AddProductToOrderRequest extends FormRequest
{
    public function getProduct() : ProductInterface
    {

    }
}
