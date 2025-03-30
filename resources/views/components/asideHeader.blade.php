<div class="group relative">
  <div
    class="absolute -inset-1 rounded-lg bg-gradient-to-r from-rose-600 via-red-500 to-orange-500 opacity-20 blur-lg transition-all duration-500 group-hover:opacity-70 group-hover:blur-xl"
  ></div>

  <div
    class="relative rounded-lg border border-white/10 bg-gradient-to-b from-gray-900 via-gray-950/90 to-black px-8 py-4 shadow-xl"
  >
    <div
      class="absolute inset-x-0 top-px h-px bg-gradient-to-r from-transparent via-rose-500 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100"
    ></div>
    <div
      class="absolute inset-x-0 bottom-px h-px bg-gradient-to-r from-transparent via-orange-500 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100"
    ></div>

    <div class="relative flex items-center justify-between gap-6">
      <div class="flex items-center gap-2">
        <div class="relative flex h-8 w-8 items-center justify-center">
          <div
            class="absolute inset-0 rounded-full border border-rose-500/20 border-t-rose-500 transition-transform duration-1000 group-hover:rotate-180"
          ></div>
          <div class="absolute inset-[3px] rounded-full bg-gray-950"></div>
          <span class="relative text-sm font-bold text-rose-500">
            {{$chats->count()}}
          </span>
        </div>

        <div class="flex flex-col gap-1">
          <div class="flex items-center gap-2">
            <span class="text-xs font-bold text-white">Channels</span>
            <div
              class="h-1 w-1 rounded-full bg-orange-500 shadow-lg shadow-orange-500/50"
            ></div>
          </div>

          <div class="h-1.5 w-20 overflow-hidden rounded-full bg-gray-800">
            <div
                style="width: {{$chats->count() * 10}}%"
              class="h-full rounded-full bg-gradient-to-r from-rose-500 to-orange-500 transition-all duration-300 group-hover:w-full!"
            ></div>
          </div>
        </div>
      </div>

      <div class="flex items-center gap-3">
        <div
          class="relative flex h-4 w-4 items-center justify-center rounded-lg bg-rose-500/10"
        >
          <svg
            stroke="currentColor"
            viewBox="0 0 24 24"
            fill="none"
            class="h-3 w-3 text-green-500"
          >
            <path
              d="M13 10V3L4 14h7v7l9-11h-7z"
              stroke-width="2"
              stroke-linejoin="round"
              stroke-linecap="round"
            ></path>
          </svg>
          <div
            class="absolute inset-0 rounded-lg bg-rose-500/10 blur-sm transition-all duration-300 group-hover:blur-md"
          ></div>
        </div>

        <span class="text-xs font-semibold text-white">READY</span>

        <div class="flex gap-1">
          <div
            class="h-1 w-1 rounded-full bg-green-500/40 transition-all duration-300 group-hover:bg-green-500"
          ></div>
          <div
            class="h-1 w-1 rounded-full bg-green-500/40 transition-all duration-300 group-hover:bg-green-500 group-hover:delay-75"
          ></div>
          <div
            class="h-1 w-1 rounded-full bg-green-500/40 transition-all duration-300 group-hover:bg-green-500 group-hover:delay-150"
          ></div>
        </div>
      </div>
    </div>
  </div>
</div>
