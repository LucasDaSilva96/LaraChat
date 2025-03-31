<?php

namespace App\Http\Controllers;

use App\Events\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //

    public $fillable = [
        'content',
        'user_id',
        'chat_room_id',
    ];

    public function send(Request $request)
    {
        $message = new Message();
        $message->content = $request->input('content');
        $message->user_id = Auth::id();
        $message->chat_room_id = $request->input('chat_room_id');
        $message->save();

        broadcast(new Chat($message));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
