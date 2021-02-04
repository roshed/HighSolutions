<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" id="app">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                @if(session('success'))
                <div class="max-w-7xl mx-auto">
                    <div class="my-4 mx-auto py-2 px-4 flex items-center rounded border-r-8 border-teal bg-green-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="h-6 w-6 text-teal mr-4"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path></svg>
                        <div>
                        <p class="font-bold">Info</p>
                        <p>{{session('success')}}</p>
                        </div>
                    </div>
                </div>
                @endif
                {{ $slot }}
            </main>
        </div>

    </body>
</html>
