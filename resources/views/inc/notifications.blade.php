<!-- Success -->
@if ($message = Session::get('success'))
    <div x-show="notify"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-4"
        x-transition:leave-end="opacity-0 translate-x-8"
        x-init="setTimeout(() => notify = false, 5000)"
        class="fixed z-50 flex items-center gap-4 p-4 text-white bg-green-500 shadow-lg rounded-xl inset-x-10 sm:inset-x-auto sm:right-8 bottom-6"
        role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <strong class="text-sm font-medium">{{ $message }}</strong>
        {{-- <strong class="text-sm font-medium">User Added Successfully</strong> --}}

        <button x-on:click="toggleNotify"
            class="p-1 ml-auto text-gray-100 transition-colors duration-200 transform rounded-md hover:text-gray-200 focus:outline-none">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
@endif
