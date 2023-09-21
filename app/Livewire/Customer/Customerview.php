<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customerview extends Component
{
    use WithPagination;
    public $search ="";


    public function render()
    {
        $customers = Customer::where('name', 'like', '%' . $this->search . '%')->orderBy('id')->paginate();
        return view('livewire.customer.customerview',compact('customers'));
    }
}
