<?php

use App\Models\ChatRoom;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat.{roomId}', function (User $user, ChatRoom $roomId) {

    return $user->only(['id', 'name']);
});



Broadcast::channel('app', function(User $user) {
    return true;
});
