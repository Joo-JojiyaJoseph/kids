<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Employee') }}
    </x-slot>
    <div class="container mx-auto p-4 ">
        <form class=" bg-white p-6 rounded shadow-md" action="{{ route('employee.update', $employees['id']) }}"
            method="POST">
            @method('PUT')
            @csrf
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Employee Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('name',$employees->name)" required autofocus/>
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input type="email" id="email" name="email" class="mt-1 block w-full"
                        :value="old('email',$employees->email)" required autofocus/>
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <textarea id="address" name="address"
                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{$employees->address}}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                </div>

                <!-- Designation -->
                <div class="mb-4">
                    <x-input-label for="designation" :value="__('Designation')" />
                    <select id="designation" name="designation"
                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                         <option value="Manager" {{ $employees['designation'] == 'Manager' ? 'selected' : '' }}>Manager
                    </option>
                    <option value="Cook" {{ $employees['designation'] == 'Cook' ? 'selected' : '' }}>Cook</option>
                    <option value="Delivery" {{ $employees['designation'] == 'Delivery' ? 'selected' : '' }}>
                        Delivery</option>
                    <option value="Sales" {{ $employees['designation'] == 'Sales' ? 'selected' : '' }}>Sales
                    </option>
                    <x-input-error class="mt-2" :messages="$errors->get('designation')" />
                </select>

            </div>

            <!-- Started on -->
            <div class="mb-4">
                <x-input-label for="startedOn" :value="__('started On')" />
                <x-text-input type="date" id="startedOn" name="startedOn" class="mt-1 block w-full"
                :value="old('startedOn',date('Y-m-d', strtotime($employees->started_on)))" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('startedOn')" />
            </div>
            <!-- Ended on -->
            <div class="mb-4">
                <x-input-label for="endedOn" :value="__('Ended On')" />
                <x-text-input type="date" id="endedOn" name="endedOn" class="mt-1 block w-full"
                :value="old('endedOn',date('Y-m-d', strtotime($employees->ended_on)))" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('endedOn')" />
            </div>
            <!-- Accomadation -->
            <div class="mb-4">
                <x-input-label for="accomadation" :value="__('Accomadation')" />
                <x-text-input type="text" id="accomadation" name="accomadation" class="mt-1 block w-full"
                    :value="old('accomadation',$employees->accomadation)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('accomadation')" />

            </div>
            <!-- Allowance -->
            <div class="mb-4">
                <x-input-label for="allowance" :value="__('Allowance')" />
                <x-text-input type="text" id="allowance" name="allowance" class="mt-1 block w-full"
                    :value="old('allowance',$employees->allowance)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('allowance')" />
            </div>

            <!-- Transportation Expence -->
            <div class="mb-4">
                <x-input-label for="transportation_expense" :value="__('Transportation Expense')" />
                <x-text-input type="text" id="transportation_expense" name="transportation_expense"
                    class="mt-1 block w-full" :value="old('transportation_expense',$employees->transportaion_expense)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('transportation_expense')" />
            </div>

            <!-- Mobile -->
            <div class="mb-4">
                <x-input-label for="mobile" :value="__('Mobile')" />
                <x-text-input type="text" id="mobile" name="mobile" class="mt-1 block w-full" :value="old('mobile',$employees->mobile)"
                    required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('mobile')" />
            </div>
            <!-- Vehicle-->
            <div class="mb-4">
                <x-input-label for="vehicle" :value="__('vehicle')" />
                <x-text-input type="text" id="vehicle" name="vehicle" class="mt-1 block w-full" :value="old('vehicle',$employees->vehicle)"
                    required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('vehicle')" />
            </div>
            <!-- Yearly Ticket-->
            <div class="mb-4">
                <x-input-label for="yearly_ticket" :value="__('Yearly Ticket')" />
                <x-text-input type="text" id="yearly_ticket" name="yearly_ticket" class="mt-1 block w-full"
                    :value="old('yearly_ticket',$employees->yearlyticket)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('yearly_ticket')" />
            </div>

            <!-- Medical Payment-->
            <div class="mb-4">
                <x-input-label for="medical_payment" :value="__('Medical Payment')" />
                <x-text-input type="text" id="medical_payment" name="medical_payment" class="mt-1 block w-full"
                    :value="old('medical_payment',$employees->medical_payment)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('medical_payment')" />
            </div>

            <!-- Bonus-->
            <div class="mb-4">
                <x-input-label for="bonus" :value="__('Bonus')" />
                <x-text-input type="text" id="bonus" name="bonus" class="mt-1 block w-full"
                    :value="old('bonus',$employees->bonus)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('bonus')" />
            </div>

            <!-- Visa Charge-->
            <div class="mb-4">
                <x-input-label for="visa_charge" :value="__('Visa Charge')" />
                <x-text-input type="text" id="visa_charge" name="visa_charge" class="mt-1 block w-full"
                    :value="old('visa_charge',$employees->visa_charge)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('visa_charge')" />
            </div>
            <!-- Insurance-->
            <div class="mb-4">
                <x-input-label for="insurance" :value="__('Insurance')" />
                <x-text-input type="text" id="insurance" name="insurance" class="mt-1 block w-full"
                    :value="old('insurance',$employees->insurance)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('insurance')" />
            </div>

            <!-- Salary-->
            <div class="mb-4">
                <x-input-label for="salary" :value="__('Salary')" />
                <x-text-input type="text" id="salary" name="salary" class="mt-1 block w-full"
                    :value="old('salary',$employees->salary)" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('salary')" />
            </div>
    </div>
            <!-- Submit Button -->
            <div class="flex justify-end gap-5 p-10">
                <a href="{{ route('employee.show', $employees['id']) }}">
                    <x-secondary-button>
                        Cancel
                    </x-secondary-button>
                </a>
                <x-primary-button>
                    Save
                </x-primary-button>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>
