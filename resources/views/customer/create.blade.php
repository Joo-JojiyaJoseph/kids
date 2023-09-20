<x-app-layout>
    <div class="w-11/12 mx-auto mt-16">

        <div>
            <x-slot name="header">
                {{ __('Create-Customers') }}
            </x-slot>
        </div>
    </div>
    <div class="container mx-auto p-4 ">
        <form class=" bg-white p-6 rounded shadow-md" action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="grid md:grid-cols-2 gap-10">
                <!--  Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('name')" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input type="email" id="email" name="email" class="mt-1 block w-full"
                        :value="old('email')" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <textarea id="address" name="address"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                </div>


                <!-- Mobile -->
                <div class="mb-4">
                    <x-input-label for="mobile" :value="__('Mobile')" />
                    <x-text-input type="text" id="mobile" name="mobile" class="mt-1 block w-full"
                        :value="old('mobile')" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('mobile')" />
                </div>


            </div>

            <!-- Submit Button -->
            <div class="flex justify-end gap-5 p-10">
                <a href="{{ route('customer.index') }}">
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
