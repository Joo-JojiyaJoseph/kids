<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class Employeeview extends Component
{
    public $employees;
    public $sortBy = 'name'; // Default sorting column
    public $sortDirection = 'asc'; // Default sorting direction
    public function render()
    {
        // $this->employees=Employee::orderBy()-> all();
        // $this->employees = Employee::orderBy('name')->get();
        $this->employees = Employee::orderBy($this->sortBy, $this->sortDirection)->get();

        // return view('livewire.employee.employee');
        return view('livewire.employee.employeeview');
    }
    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortBy = $field;
    }
}
