<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:employees,email',
                'mobile' => 'required|numeric',
            ]
        );
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'designation' => $request->designation,

            'started_on' => $request->startedOn,
            'ended_on' => $request->endedOn,
            'accomadation' => $request->accomadation,
            'allowance' => $request->allowance,
            'transportaion_expense'=> $request->transportation_expense,

            'mobile' => $request->mobile,
            'vehicle' => $request->vehicle,
            'yearlyticket' => $request->yearly_ticket,
            'medical_payment' => $request->medical_payment,

            'bonus' => $request->bonus,
            'visa_charge' => $request->visa_charge,
            'insurance' => $request->insurance,
            'salary' => $request->salary,
        ];

        Employee::create($data);
        return redirect()->route('employee.index')->with('status',"added sucessfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee=Employee::find($id);
        return view('employee.show',compact('employee'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees=Employee::find($id);
        return view('employee.edit',compact('employees'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'mobile' => 'required|numeric',

            ]
        );

        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'designation' => $request->designation,

            'started_on' => $request->startedOn,
            'ended_on' => $request->endedOn,
            'accomadation' => $request->accomadation,
            'allowance' => $request->allowance,
            'transportaion_expense'=> $request->transportation_expense,

            'mobile' => $request->mobile,
            'vehicle' => $request->vehicle,
            'yearlyticket' => $request->yearly_ticket,
            'medical_payment' => $request->medical_payment,

            'bonus' => $request->bonus,
            'visa_charge' => $request->visa_charge,
            'insurance' => $request->insurance,
            'salary' => $request->salary,
        ];

        $employee = Employee::find($id);
        $employee->update($data);
        return redirect()->route('employee.index')->with('status',"Updated sucessfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect()->route('employee.index')->with('status',"Updated sucessfully");

    }
}
