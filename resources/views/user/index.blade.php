<x-app-layout>
    <div class="w-11/12 mx-auto mt-16 flex items-center justify-between">
        <div>
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Users') }}
            </h2>
        </div>
        <div>
            <a href="{{ route('user.create') }}">
                <x-primary-button>
                    Add User
                </x-primary-button>
            </a>
        </div>
    </div>

    <div class="py-12">
        <div class="w-11/12 mx-auto">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <livewire:user.index />
            </div>
        </div>
    </div>
</x-app-layout>
