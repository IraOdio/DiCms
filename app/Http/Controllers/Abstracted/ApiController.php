<?php


namespace App\Http\Controllers\Abstracted;


use App\BussinessLayout\ZeroLayout\UI\ServiceHelperUI;
use Illuminate\Http\JsonResponse;

abstract class ApiController extends AbstractController
{
    public string $ui = ServiceHelperUI::API_UI;

    protected function response_api($data = [], $status = 200, array $headers = [], $options = 0) : JsonResponse
    {
        return response()->json($data, $status, $headers,$options);
    }
}
