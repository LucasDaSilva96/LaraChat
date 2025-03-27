<?php

namespace App\Providers;

use App\Models\ChatRoom;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $chats = ChatRoom::all();
        view()->share('chats', $chats);
    }
}
