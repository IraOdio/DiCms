<?php


namespace App\Http\Controllers\Abstracted;


use App\CoreLayout\UIManager\Abstracted\UIManagerAbstracted;
use Illuminate\Http\JsonResponse;

abstract class ApiController extends ControllerAbstract
{
    protected string $ui = UIManagerAbstracted::API_UI;

    protected function response_api($data = [], $status = 200, array $headers = [], $options = 0) : JsonResponse
    {
        return response()->json($data, $status, $headers,$options);
    }
}
