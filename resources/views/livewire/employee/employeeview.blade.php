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
                    Designation
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                    Started On
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                    Ended On
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($employees as $employee)
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $loop->iteration + ($employees->currentPage() - 1) * $employees->perPage() }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $employee['name'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $employee['email'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $employee['address'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $employee['designation'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ date('d-m-y', strtotime($employee['started_on'])) }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ date('d-m-y', strtotime($employee['ended_on'])) }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap">
                   <a href="{{route('employee.show',$employee['id'])}}"> <x-primary-button>
                        View More
                    </x-primary-button></a>



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
    {{ $employees->links() }}
</div>


</div>
