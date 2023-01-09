<?php


namespace App\Http\Controllers\Abstracted;


use App\CoreLayout\UI\UIHelper;
use Illuminate\Http\JsonResponse;

abstract class ApiController extends ControllerAbstract
{
    public string $ui = UIHelper::API_UI;

    protected function response_api($data = [], $status = 200, array $headers = [], $options = 0) : JsonResponse
    {
        return response()->json($data, $status, $headers,$options);
    }
}
