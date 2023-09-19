<x-app-layout>
    <div class="w-11/12 mx-auto mt-16 flex items-center justify-between">
        <div>
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Customer') }}
            </h2>
        </div>
        <div>
            <!-- Open Modal Button -->
            <a href="{{ route('customer.create') }}">
                <x-primary-button>
                    Add Customer
                </x-primary-button>
                @if (session('status') === 'added sucessfully')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Added sucessfully') }}</p>
            @endif
            </a>
        </div>

    </div>
    <section>
        <div class="container mx-auto">
            <livewire:customer.customerview />
        </div>
    </section>
</x-app-layout>
