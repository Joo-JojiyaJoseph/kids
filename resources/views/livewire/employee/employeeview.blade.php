
<div class="shadow border-b border-gray-200 rounded-xl my-10 overflow-x-auto">
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
                            {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Accomadation
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Allowance
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Transportation Expense
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Mobile
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Vehicle
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Yearly Ticket
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Medical Payment
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Bonus
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Visa Charge
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                Insurance
                            </th> --}}

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($employees as $employee )
                        <!-- Add your data rows here -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                               {{$loop->iteration}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$employee['name']}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$employee['email']}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$employee['address']}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$employee['designation']}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$employee['name']}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$employee['email']}}
                            </td>
                            <td  x-data="{ showviewmore{{$employee['id']}}: false }" class="px-6 py-4 whitespace-nowrap">
                                <x-primary-button @click="showviewmore{{$employee['id']}} = true">
                                    View More
                                </x-primary-button>

                                <!-- Modal view More - employee -->
                                <div x-show="showviewmore{{$employee['id']}}" style="display:none;" class="bg-white">
                                    <div x-cloak @click="showviewmore{{$employee['id']}} = false" class="fixed inset-0 bg-black opacity-50"></div>
                                    <div x-cloak @click.away="showviewmore{{$employee['id']}} = false"
                                        class="fixed inset-0 flex items-center justify-center z-50">
                                        <div class="bg-white p-8 rounded shadow-lg">
                                            <h2 class="text-2xl mb-4 text-center font-bold">{{$employee['name']}}</h2>
                                            <div class="px-6 pb-4">
                                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#WebDev</span>
                                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Coding</span>
                                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Tech</span>
                                            </div>
                                                <div class="flex justify-between gap-5">
                                                    <x-primary-button @click="showviewmore{{$employee['id']}} = false">
                                                       Close
                                                    </x-primary-button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

</div>

{{--
<table>
    <thead>
        <tr>
            <th>
                <a wire:click="sortBy('name')" href="#" role="button">
                    Name
                    @if($sortBy === 'name')
                        @if($sortDirection === 'asc')
                            &#9650;
                        @else
                            &#9660;
                        @endif
                    @endif
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee['name'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}


