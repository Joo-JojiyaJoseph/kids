<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen dark:bg-gray-900">
        {{-- Navigation --}}
        @include('layouts.side-navigation')

        <!-- Page Content -->
        <main class="w-full h-full bg-gray-100 overflow-y-auto">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="mt-10">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ $header }}
                        </h2>
                    </div>
                </header>
            @endif
            {{ $slot }}
        </main>
    </div>
</body>

</html>
