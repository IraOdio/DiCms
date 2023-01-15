<?php


namespace ChatLayout;


use App\BussinessLayout\ChatLayout\Abstracted\ChatServiceAbstract;
use App\BussinessLayout\ChatLayout\Exceptions\ChatMessagePostNotValidDialogException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

/**
 * Class ChatServiceMessagePostCheckValidDialogTest
 * @package ChatLayout
 */
class ChatServiceMessagePostCheckValidDialogTest extends TestCase
{

    public function test_index(){
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
}
