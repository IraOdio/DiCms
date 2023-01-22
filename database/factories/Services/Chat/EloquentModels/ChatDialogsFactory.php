<?php


namespace Database\Factories\Services\Chat\EloquentModels;


use App\Services\Chat\EloquentModels\ChatDialogs;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatDialogsFactory extends Factory
{
    protected $model = ChatDialogs::class;

    public function definition()
    {
        return [
            'name' => 'fake-dialog'
        ];
    }
}
