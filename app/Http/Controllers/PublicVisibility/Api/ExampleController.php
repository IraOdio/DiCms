<?php

namespace App\Http\Controllers\PublicVisibility\Api;

use App\Http\Controllers\Abstracted\ApiController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExampleController extends ApiController
{
    protected string $bar_label = 'Example Controller';
    public function exampleAction(): JsonResponse
    {
        return $this->response_api(['example-json-data-response' => [1,2,4,8]]);
    }

    public function exampleGetResources() : JsonResponse
    {
        $responseData = [
            'message' => 'Вызван запрос на получение всех ресурсов',
            'data' => [

            ]
        ];
        return $this->response_api(data: $responseData);
    }

    public function exampleGetResourcesFromId(int $id) : JsonResponse
    {
        $message = "Ресурс с ид {$id}";
        $status = $id;
        if ($status === 404) $message .= " не найден :(";
        if ($status === 200) $message .= " успешно найден :)";
        $responseData = [
            'message' => $message,
            'id' => $id,
            'data' => [
                'resource-name','resource-some-value'
            ]
        ];
        return $this->response_api(data: $responseData, status: $status);
    }

    public function examplePostResources(Request $request) : JsonResponse
    {
        $data = $request->post('data');
        $status = $data['status'] ?? 400;
        $responseData = [
            'message' => 'Вызван запрос на добавление ресурса, результат обработан успешно',
            'data' => $data
        ];
        if ($status !== 200) {
            $responseData = [
                'message' => 'Вызван запрос на добавление ресурса, результат обработан с ошибкой',
                'data' => $data
            ];
        }
        return $this->response_api(data: $responseData,status: $status);
    }

    public function examplePutResources(int $id,Request $request) : JsonResponse
    {
        $data = $request->post('data');
        $status = $id;
        $message = 'Ресурс с ид = ' . $id . " успешно обновлён!";
        if ($id === 400) {
            $message = "Ресурс с ид = " . $id . " не получилось обновить :(";
        }
        $responseData = [
            'message' => $message,
            'data' => $data
        ];
        return $this->response_api(data : $responseData, status: $status);
    }

    public function exampleDeleteResources(int $id) : JsonResponse
    {
        $status = $id;
        $message = "Ресурс с ид {$id}";
        if ($status === 200) $message .= " удалён успешно!";
        if ($status === 400) $message .= " не получилось удалить :(";
        $responseData = [
            'message' => $message,
            'id' => $id
        ];
        return $this->response_api(data: $responseData,status: $status);
    }
}
