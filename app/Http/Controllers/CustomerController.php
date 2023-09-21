<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'mobile' => 'required|numeric',
        ]
    );
    $data=[
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'mobile' => $request->mobile,

    ];

    Customer::create($data);
    return redirect()->route('customer.index')->with('status',"added sucessfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers=Customer::find($id);
        return view('customer.edit',compact('customers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'mobile' => 'required|numeric',
        ]
    );
    $data=[
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'mobile' => $request->mobile,

    ];

    $customer = Customer::find($id);
    $customer->update($data);
    return redirect()->route('customer.index')->with('status',"Updated sucessfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::destroy($id);
        return redirect()->route('customer.index')->with('status',"Deleted sucessfully");
    }
}
