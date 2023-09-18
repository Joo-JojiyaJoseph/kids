<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class Employeeview extends Component
{
    public $employees;

    public $searchTerm ="";

    public function search()
    {
        $this->employees = Employee::where('name', 'like', '%' . $this->searchTerm . '%')->get();
    }
    public function render()
    {
        $this->employees = Employee::where('name', 'like', '%'.$this->searchTerm.'%')->get();
        return view('livewire.employee.employeeview');
    }

    // public function editEmployee($id)
    // {
    //     return redirect()->route('employee.show',$id);
    // }

    // public function addEmployee()
    // {
    //    return view('employee.add');
    // }
    // public function deleteEmployee($id)
    // {
    //     return redirect()->route('employee.destroy',$id);

    // }
}
