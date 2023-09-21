<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class Employeeview extends Component
{
    use WithPagination;
    public $search ="";

    public function render()
    {
        $employees = Employee::where('name', 'like', '%'.$this->search.'%')->orderBy('id')->paginate();
        return view('livewire.employee.employeeview',compact('employees'));
    }
}
