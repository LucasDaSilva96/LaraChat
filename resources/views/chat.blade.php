<x-layouts.default>
    <h1 class="text-2xl font-bold text-center">Chat</h1>
    <section class="w-full h-full space-y-4">

        {{-- Chat --}}

        <div class="w-full h-[70dvh] p-2 overflow-y-auto bg-gray-200"></div>

        {{-- input --}}
        <form action="" class="flex flex-col w-full gap-2">
            <textarea minlength="1" required class="w-full h-20 p-2 border rounded border-gray-400" placeholder="Type your message here"></textarea>
            <button class="w-full p-2 bg-blue-500 text-white cursor-pointer">Send</button>
        </form>

    </section>
</x-layouts.default>
