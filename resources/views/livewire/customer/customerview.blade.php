<div class="shadow border-b border-gray-200 rounded-xl my-10">
    <div class="w-full flex justify-end px-10 py-3">
        <input class="w-1/3 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-full shadow-sm"
            wire:model.live="search" type="search" placeholder="Search in Name">

    </div>
    <table class="divide-y divide-gray-200 w-full p-10">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                    id
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                    Address
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                    Mobile
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">

                </th>

            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($customers as $customer)
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $loop->iteration + ($customers->currentPage() - 1) * $customers->perPage() }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $customer['name'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $customer['email'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $customer['address'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $customer['mobile'] }}
                </td>
                <td>
                    <div class="flex gap-5">
                        {{-- edit button --}}
                        <a href="{{ route('customer.edit', $customer['id']) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-blue-950">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>

                        {{-- delete button --}}
                        <div x-data="">
                            <a
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-employee-deletion{{ $customer['id'] }}')"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-red-800">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg></a>
                            <x-modal name="confirm-employee-deletion{{ $customer['id'] }}" focusable>
                                <form method="post" action="{{ route('customer.destroy', $customer['id']) }}"
                                    class="p-6">
                                    @csrf
                                    @method('delete')
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        {{ __('Are you sure you want to delete?') }}
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
                </td>

                </tr>
            @empty
                <tr>
                    <td class="px-4 py-3" colspan="6">No Data found...</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4 px-10">
        {{ $customers->links() }}
    </div>

</div>
