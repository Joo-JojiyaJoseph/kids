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
    @livewireStyles
</head>

<body x-data="data" class="font-sans antialiased">
    <div class="flex h-screen font-sans bg-blue-50/50" :class="{ 'overflow-hidden': isSideMenuOpen }" x-cloak>
        <!-- Desktop sidebar -->
        @include('layouts.navigation')
        <!-- Mobile sidebar -->
        @include('layouts.navigation-mobile')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.top-menu')
            <main class="h-full overflow-y-auto">
                <div class="container grid px-6 mx-auto">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700">
                        {{ $header }}
                    </h2>

                    @include('inc.notifications')

                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    @livewireScripts

    {{-- Alpine --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },

                closeProfileMenu() {
                    this.isProfileMenuOpen = false
                },

                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },

                closeSideMenu() {
                    this.isSideMenuOpen = false
                },

                isMultiLevelMenuOpen: false,
                toggleMultiLevelMenu() {
                    this.isMultiLevelMenuOpen = !this.isMultiLevelMenuOpen
                },

                notify: true,
                toggleNotify() {
                    this.notify = !this.notify
                },

                isMainMenuOpen: true,
                toggleMainMenu() {
                    this.isMainMenuOpen = !this.isMainMenuOpen
                }
            }))
        })
    </script>
</body>

</html>
