<?php


namespace Database\Factories\BusinessLayer\Chat\EloquentModels;


use App\BusinessLayer\Chat\EloquentModels\ChatDialogs;
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
