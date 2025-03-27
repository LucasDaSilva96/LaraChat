@props([
    'chats' => [],
])

<aside id="aside_dash" class="w-[200px] md:w-xs max-h-full overflow-y-auto overflow-x-hidden p-2 border rounded border-white/20">

    <ul>

        @foreach ($chats as $chat )

        <li>

            <a href="{{route('chat', [$chat->id])}}">
                {{$chat->title}}
            </a>

        </li>
        @endforeach

    </ul>
</aside>
