<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="py-12">
        <div class="w-11/12 mx-auto grid grid-cols-4 gap-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('user.index') }}">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Users
                    </div>
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('employee.index') }}">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        HR
                    </div>
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('customer.index') }}">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Customer
                    </div>
                </a>
            </div>
   
</x-app-layout>
