<?php


namespace ChatLayer;


use App\BusinessLayer\Chat\Abstracted\ChatServiceAbstract;
use App\BusinessLayer\Chat\EloquentModels\ChatDialogs;
use App\BusinessLayer\Chat\Exceptions\ChatMessagePostNotValidDialogException;
use App\BusinessLayer\Chat\Exceptions\ChatMessagePostNotValidUserException;
use App\BusinessLayer\User\EloquentModels\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ChatServiceMessagePostTest extends TestCase
{

    /**
     * Этот тест-кейс проверяет - работает ли корректно проверка на существование диалога, в который отправляют сообщение в чат
     * Юзер-ид здесь не имеет значение, так как функционал в первую очередь проверяет существование диалога
     */
    public function testCheckValidDialog() : void
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

    /**
     * Этот тест-кейс проверяет - работает ли корректно проверка на существование пользователя, от имени которого отправляют сообщение в чат
     */
    public function testCheckValidUser() : void
    {
        $condition = false;
        /** @var ChatServiceAbstract $chatService */
        $chatService = App::make(ChatServiceAbstract::class);
        $message = "test_chat_service_message_valid_post_message";
        $dialogEloquent = ChatDialogs::factory()->create();
        $dialogId = $dialogEloquent->id;
        $userId = -1;

        try {
            $messageId = $chatService->chatMessagePostAction($message,$userId,$dialogId);
            if (is_int($messageId)) $condition = false;
        } catch (ChatMessagePostNotValidUserException $ex){
            $condition = true; // если выбросился экзепшен ChatMessagePostNotValidUserException, значит все окей!
        } catch (\Throwable $ex) {
            $condition = false;
        }
        $this->assertTrue($condition);
    }

    /**
     * Этот тест-кейс проверяет - работает ли корректно отправка сообщения в чат
     */
    public function testCheckPublishedMessage() : void
    {
        /** @var ChatServiceAbstract $chatService */
        $chatService = App::make(ChatServiceAbstract::class);
        $message = "test_chat_service_message_valid_post_message";
        $dialogEloquent = ChatDialogs::factory()->create(); // создаем диалог, в который отправляется сообщение
        $dialogId = $dialogEloquent->id;

        $userEloquent = User::factory()->create(); // создаем юзера, от имени которого отправляется сообщение
        $userId = $userEloquent->id;
        $messageId = $chatService->chatMessagePostAction($message,$userId,$dialogId); // должен вернуть ид сообщения
        $this->assertTrue(is_int($messageId));
    }
}
