<x-app-layout>
    <div class="w-11/12 mx-auto mt-16 flex items-center justify-between">
        <div>
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Employees') }}
            </h2>
        </div>
        <div>
            <!-- Open Modal Button -->
            <a href="{{ route('employee.create') }}">
                <x-primary-button>
                    Add Employee
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
