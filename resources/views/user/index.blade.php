<x-app-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>
    <div class="w-full flex items-center justify-end -mt-20">
        <div>
            <a href="{{ route('user.create') }}">
                <x-primary-button>
                    Add User
                </x-primary-button>
            </a>
        </div>
    </div>

    <div class="w-full">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <livewire:user.index />
        </div>
    </div>
</x-app-layout>
