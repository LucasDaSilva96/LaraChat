<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatRoomController extends Controller
{
    //

    public function index(int $id)
    {
        $chat = ChatRoom::findOrFail($id);
        $messages = $chat->messages;

        return view('chat',[
            'chat' => $chat,
            'messages' => $messages
        ]);
    }
}
