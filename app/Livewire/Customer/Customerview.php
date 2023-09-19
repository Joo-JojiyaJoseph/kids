<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class Customerview extends Component
{
    public $customers;

    public $searchTerm ="";

    public function search()
    {
        $this->customers = Customer::where('name', 'like', '%' . $this->searchTerm . '%')->get();
    }

    public function render()
    {
        $this->customers = Customer::where('name', 'like', '%' . $this->searchTerm . '%')->get();
        return view('livewire.customer.customerview');
    }
}
