<x-app-layout>
    <div class="container mx-auto bg-white rounded shadow-m">
        <x-slot name="header">
            {{ __($employee['name']) }}
        </x-slot>

        <div class="px-6 pb-4 grid xl:grid-cols-[45%,10%,45%] grid-cols-1 gap-5 p-10">
            <div class="px-6 pb-4 grid grid-cols-3 gap-5 p-10 ">
                <div>
                    <p class="text-base font-bold">Name</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['name'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Email</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['email'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold"> Address</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['address'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Designation</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['designation'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Started On</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base"> {{ date('d-m-y', strtotime($employee['started_on'])) }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Ended On</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base"> {{ date('d-m-y', strtotime($employee['ended_on'])) }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Accomadation</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['accomadation'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Allowance</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['allowance'] }}</p>
                </div>
            </div>

            <div class="hidden xl:block bg-gray-400 w-0.5 h-full my-5"></div>
            <div class="px-6 pb-4 grid grid-cols-3 gap-5 p-10">
                <div>
                    <p class="text-base font-bold">Transportation</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['transportaion_expense'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Mobile</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['mobile'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Vehicle</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['vehicle'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Yearly Ticket</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['yearlyticket'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Medical Payment</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['medical_payment'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Bonus</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['bonus'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Visa Charge</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['visa_charge'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Insurance</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['insurance'] }}</p>
                </div>

                <div>
                    <p class="text-base font-bold">Salary</p>
                </div>
                <div>
                    <p class="text-base text-center">:</p>
                </div>
                <div>
                    <p class="text-base">{{ $employee['salary'] }}</p>
                </div>
            </div>

        </div>

        <div class="flex justify-end gap-5 p-10">
            <a href="{{ route('employee.index') }}">
                <x-secondary-button>
                    Back
                </x-secondary-button>
            </a>
            <a href="{{ route('employee.edit', $employee['id']) }}"> <x-primary-button>
                    Edit
                </x-primary-button></a>
            {{-- delete button --}}
            <x-danger-button x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-employee-deletion')">{{ __('Delete') }}</x-danger-button>
            <x-modal name="confirm-employee-deletion" focusable>
                <form method="post" action="{{ route('employee.destroy', $employee['id']) }}" class="p-6">
                    @csrf
                    @method('delete')
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Are you sure you want to delete
                                                   ?') }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Once your data is deleted, all of its resources and data will be permanently deleted.') }}
                    </p>
                    <div class="mt-6 flex justify-end">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            {{ __('Cancel') }}
                        </x-secondary-button>

                        <x-danger-button class="ml-3">
                            {{ __('Delete') }}
                        </x-danger-button>
                    </div>
                </form>
            </x-modal>
        </div>
    </div>
    </div>
</x-app-layout>
