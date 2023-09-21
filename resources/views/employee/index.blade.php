<x-app-layout>
    <x-slot name="header">
        {{ __('Employees') }}
    </x-slot>
    <div class="w-full flex items-center justify-end -mt-20">
        <div>
            <a href="{{ route('employee.create') }}">
                <x-primary-button>
                    Add Employees
                </x-primary-button>
            </a>
        </div>
    </div>
    <section>
        <div class="container mx-auto">
            <livewire:employee.employeeview />
        </div>
    </section>
</x-app-layout>
