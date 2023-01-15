<?php


namespace ChatLayout;


use App\BussinessLayout\ChatLayout\Abstracted\ChatServiceAbstract;
use App\BussinessLayout\ChatLayout\EloquentModels\ChatDialogs;
use App\BussinessLayout\ChatLayout\Exceptions\ChatMessagePostNotValidUserException;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ChatServiceMessagePostCheckValidUserTest extends TestCase
{
    public function test_index()
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
}
