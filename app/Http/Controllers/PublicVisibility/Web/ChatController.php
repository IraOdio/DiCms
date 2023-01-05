<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\Http\Controllers\Abstracted\WebController;
use Illuminate\View\View;

class ChatController extends WebController
{
    public function showChatView() : View
    {
        return view('public.lk.chat.chat-master');
    }
}
