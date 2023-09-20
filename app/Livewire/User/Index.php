<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->orderBy('id')->paginate();
        return view('livewire.user.index', compact('users'));
    }
}
