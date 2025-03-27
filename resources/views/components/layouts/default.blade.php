<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])

        @endif
    </head>
    <body class="HtmlContainer">

        <div class="absolute inset-0 flex items-center justify-center p-2">


            <div class="w-full max-w-7xl h-[90dvh] bg-white/10 backdrop-blur text-slate-50 rounded p-2 flex">

                <x-asideDash :chats="$chats"  />

                <main class="w-full">
                    {{ $slot }}
                </main>

            </div>

        </div>

    </body>
</html>
