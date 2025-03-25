<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ['content', 'user_id', 'chat_room_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chat()
    {
        return $this->belongsTo(ChatRoom::class);
    }

    public function getChat()
    {
        return $this->hasOne(ChatRoom::class, 'id', 'chat_room_id');
    }

}
