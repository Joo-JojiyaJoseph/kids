<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="w-full grid grid-cols-4">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{ route('user.index') }}">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Users
                </div>
            </a>
        </div>
    </div>
</x-app-layout>
