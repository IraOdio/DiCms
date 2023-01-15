<?php


namespace ChatLayout;

use App\BussinessLayout\ChatLayout\Abstracted\ChatServiceAbstract;

use App\BussinessLayout\ChatLayout\EloquentModels\ChatDialogs;
use App\BussinessLayout\UserLayout\EloquentModels\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

/**
 * Тест-кейс, если пользователь и диалог существует - сообщение должно успешно добавиться в таблицу
 * Class ChatServiceMessagePostValidTest
 * @package ChatLayout
 */
class ChatServiceMessagePostValidTest extends TestCase
{

    public function test_chat_service_message_valid_post()
    {
        /** @var ChatServiceAbstract $chatService */
        $chatService = App::make(ChatServiceAbstract::class);
        $message = "test_chat_service_message_valid_post_message";
        $dialogEloquent = ChatDialogs::create(['name' => 'fake_dialog']);
        $dialogId = $dialogEloquent->id;

        $user = new User();
        $user->name = fake()->name();
        $user->email = fake()->unique()->safeEmail();
        $user->username = fake()->name() . "!!!username";
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi!!!';
        $user->save();
        $userId = $user->id;
        $messageId = $chatService->chatMessagePostAction($message,$userId,$dialogId);
        $this->assertTrue(is_int($messageId));
    }
}
