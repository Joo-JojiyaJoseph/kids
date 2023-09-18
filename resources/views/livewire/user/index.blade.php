<div>
    <div class="flex items-center justify-end">
        <input class="w-1/3 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-full shadow-sm"
            wire:model.live="search" type="search" placeholder="Search in Name">

    </div>
    <table class="w-full border mt-6">
        <thead class="border-y">
            <tr>
                <th class="border-r py-4">Sl No.</th>
                <th class="border-r py-4">Name</th>
                <th class="border-r py-4">Email</th>
                <th class="border-r py-4">Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr class="border-b text-sm hover:bg-gray-100">
                    <td class="border-r text-center py-3">
                        {{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                    <td class="border-r text-center py-3">{{ $user->name }}</td>
                    <td class="border-r text-center py-3">{{ $user->email }}</td>
                    <td class="border-r text-center py-3"><span
                            class="text-sm font-medium px-2 py-0.5 rounded-full {{ $user->role }}">{{ $user->role }}</span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('user.edit', $user) }}">Edit</a>
                        <div>
                            <x-danger-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion-{{ $user->id }}')">{{ __('Delete') }}</x-danger-button>

                            <x-user.delete-modal :user="$user->id" />
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="px-4 py-3" colspan="6">No user found...</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
