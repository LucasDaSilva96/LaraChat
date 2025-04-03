@props([
    'chats' => [],
])


<aside id="aside_dash" class="w-[200px] md:w-xs max-h-full overflow-y-auto overflow-x-hidden border rounded border-white/20 flex flex-col items-center">

    <x-asideHeader />


    <ul class="p-2 max-h-[77.5%] h-full overflow-y-auto w-full flex flex-col gap-2">

        @foreach ($chats as $chat )

        <a href="{{route('chat', [$chat->id])}}" class="transition-all bg-transparent hover:bg-gray-950/90 rounded-lg flex items-center justify-between px-2 py-1.5 {{request()->is('chat/' . $chat->id) ? 'bg-gray-950/90!' : ''}}">

        {{$chat->title}}
    </a>
      @endforeach

    </ul>

    <div
        class="flex bg-gradient-to-b from-gray-900 via-gray-950/90 to-black w-full px-1.25 py-1.25 shadow-box-up dark:bg-box-dark dark:shadow-box-dark-out mt-auto"
        >
    <div
        class="dark:shadow-buttons-box-dark rounded-2xl w-full px-1.5 py-1.5 flex items-center justify-evenly  dark:bg-box-dark shadow-box-up"
    >


        <a
        href="{{ route('welcome') }}"
        id="home"
        title="Go to the home page"
        class="text-light-blue-light cursor-pointer hover:text-slate-50 dark:text-gray-400 border-2 inline-flex items-center mr-4 last-of-type:mr-0 p-2.5 border-transparent bg-light-secondary shadow-button-flat-nopressed  hover:shadow-button-flat-pressed focus:opacity-100 focus:outline-none active:border-2 active:shadow-button-flat-pressed font-medium rounded-full text-sm text-center dark:bg-button-curved-default-dark dark:shadow-button-curved-default-dark dark:hover:bg-button-curved-pressed-dark dark:hover:shadow-button-curved-pressed-dark dark:active:bg-button-curved-pressed-dark dark:active:shadow-button-curved-pressed-dark dark:focus:bg-button-curved-pressed-dark dark:focus:shadow-button-curved-pressed-dark dark:border-0"
        >
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="w-5 h-5"
        viewBox="0 0 20 20"
        fill="currentColor"
        >
        <path
        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
        ></path>
    </svg>
    </a>



    <form action="/logout" method="POST">
        @csrf
        @method('POST')
        <button
        id="signout"
        title="Sign out"
        class="text-light-blue-light cursor-pointer hover:text-slate-50 dark:text-gray-400 border-2 inline-flex items-center mr-4 last-of-type:mr-0 p-2.5 border-transparent bg-light-secondary shadow-button-flat-nopressed hover:border-2 hover:shadow-button-flat-pressed focus:opacity-100 focus:outline-none active:border-2 active:shadow-button-flat-pressed font-medium rounded-full text-sm text-center dark:bg-button-curved-default-dark dark:shadow-button-curved-default-dark dark:hover:bg-button-curved-pressed-dark dark:hover:shadow-button-curved-pressed-dark dark:active:bg-button-curved-pressed-dark dark:active:shadow-button-curved-pressed-dark dark:focus:bg-button-curved-pressed-dark dark:focus:shadow-button-curved-pressed-dark dark:border-0"
        >
        <svg class="w-4 h-4" viewBox="0 0 512 512" fill="currentColor">
            <path
                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
            ></path>
        </svg>
    </button>
    </form>

    </div>

</aside>
