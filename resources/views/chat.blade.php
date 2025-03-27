<x-layouts.default>

<div
  class="bg-zinc-800 shadow-md rounded-lg overflow-hidden h-full w-full"
>
  <div class="flex flex-col h-[90%]">
    <div class="px-4 py-3 border-b border-zinc-700">
      <div class="flex justify-between items-center">
        <h2 class="text-lg font-semibold text-white">
          {{ $chat->title }}
        </h2>
        <div class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">
          Online
        </div>
      </div>
    </div>
    <div
      class="flex-1 p-3 overflow-y-auto flex flex-col space-y-2"
      id="chatDisplay"
    >
      {{-- <div
        class="chat-message self-end bg-blue-500 text-white max-w-xs rounded-lg px-3 py-1.5 text-sm"
      >
        Hello! How can I assist you today?
      </div>
      <div
        class="chat-message self-start bg-zinc-500 text-white max-w-xs rounded-lg px-3 py-1.5 text-sm"
      >
        Hello! I need a Chatbot!
      </div> --}}

        @foreach ($chat->messages as $message)
            <div
            class="chat-message self-{{ $message->user_id === auth()->id() ? 'end' : 'start' }} bg-{{ $message->user_id === auth()->id() ? 'blue' : 'zinc' }}-500 text-white max-w-xs rounded-lg px-3 py-1.5 text-sm"
            >
            {{ $message->content }}
            </div>
        @endforeach

    </div>
    <div class="px-3 py-2 border-t dark:border-zinc-700">
      <form action="#" method="POST" class="flex gap-2">
        @csrf
        @method('POST')
        <input
          placeholder="Type your message..."
          class="flex-1 p-2 border rounded-lg dark:bg-zinc-700 dark:text-white dark:border-zinc-600 text-sm"
          id="chatInput"
          type="text"
        />
       <button
       type="submit"
        class="flex items-center bg-blue-500 text-white gap-1 px-4 py-2 cursor-pointer  font-semibold tracking-widest rounded-md hover:bg-blue-400 duration-300 hover:gap-2 hover:translate-x-3"
        >
        Send
        <svg
            class="w-5 h-5"
            stroke="currentColor"
            stroke-width="1.5"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
            stroke-linejoin="round"
            stroke-linecap="round"
            ></path>
        </svg>
        </button>
      </form>
    </div>
  </div>
</div>
{{-- <script>
  const chatDisplay = document.getElementById("chatDisplay");
  const chatInput = document.getElementById("chatInput");
  const sendButton = document.getElementById("sendButton");

  sendButton.addEventListener("click", () => {
    const message = chatInput.value;
    chatInput.value = "";

    const messageElement = document.createElement("div");
    messageElement.classList.add("chat-message", "self-end", "bg-blue-500", "text-white", "max-w-xs", "rounded-lg", "px-3", "py-1.5", "text-sm");
    messageElement.textContent = message;

    chatDisplay.appendChild(messageElement);
  });
</script> --}}
</x-layouts.default>
