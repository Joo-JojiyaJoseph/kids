<x-app-layout>
    <x-slot name="header">
        {{ __('Customers') }}
    </x-slot>
    <div class="w-full flex items-center justify-end -mt-20">
        <div>
            <a href="{{ route('customer.create') }}">
                <x-primary-button>
                    Add Customer
                </x-primary-button>
            </a>
        </div>
    </div>
    <section>
        <div class="container mx-auto">
            <livewire:customer.customerview />
        </div>
    </section>
</x-app-layout>
