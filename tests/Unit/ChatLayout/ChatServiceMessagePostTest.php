<?php


namespace ChatLayout;


use App\BussinessLayout\ChatLayout\Abstracted\ChatServiceAbstract;
use App\BussinessLayout\ChatLayout\EloquentModels\ChatDialogs;
use App\BussinessLayout\ChatLayout\Exceptions\ChatMessagePostNotValidDialogException;
use App\BussinessLayout\ChatLayout\Exceptions\ChatMessagePostNotValidUserException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ChatServiceMessagePostTest extends TestCase
{

    public function testCheckValidDialog()
    {
        $condition = false;
        /** @var ChatServiceAbstract $chatService */
        $chatService = App::make(ChatServiceAbstract::class);
        $message = "test_chat_service_message_valid_post_message";
        $dialogId = -1;
        $userId = -1; // в этом тесте юзер ид не имеет значение

        try {
            $messageId = $chatService->chatMessagePostAction($message,$userId,$dialogId);
            if (is_int($messageId)) $condition = false;
        } catch (ChatMessagePostNotValidDialogException $ex){
            $condition = true;
        } catch (\Throwable $ex) {
            $condition = false;
        }

        $this->assertTrue($condition);
    }

    public function testCheckValidUser()
    {
        $condition = false;
        /** @var ChatServiceAbstract $chatService */
        $chatService = App::make(ChatServiceAbstract::class);
        $message = "test_chat_service_message_valid_post_message";
        $dialogEloquent = ChatDialogs::create(['name' => 'fake_dialog']);
        $dialogId = $dialogEloquent->id;
        $userId = -1;

        try {
            $messageId = $chatService->chatMessagePostAction($message,$userId,$dialogId);
            if (is_int($messageId)) $condition = false;
        } catch (ChatMessagePostNotValidUserException $ex){
            $condition = true;
        } catch (\Throwable $ex) {
            $condition = false;
        }
        $this->assertTrue($condition);
    }

    public function testCheckPublishedMessage()
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
