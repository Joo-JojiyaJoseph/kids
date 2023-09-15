<x-app-layout>
    <div class="w-11/12 mx-auto mt-16 flex items-center justify-between">
        <div>
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Employees') }}
            </h2>
        </div>
        <div>
            <a href="">
                <x-primary-button>
                    Add Employee
                </x-primary-button>
            </a>
        </div>
    </div>
    <section>
        <div class="container mx-auto">
            <livewire:employee.employeeview/>
        </div>
    </section>

    {{-- <div class="py-12">
        <div class="w-11/12 mx-auto grid grid-cols-4">

        </div>
    </div> --}}


</x-app-layout>
