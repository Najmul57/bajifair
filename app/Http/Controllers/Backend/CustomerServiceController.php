<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $data = $this->customer::select('name', 'whatsapp','id')->latest()->get();
    
        return view('admin.pages.customer.index', compact('data'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'whatsapp' => 'required|numeric|unique:customers,whatsapp',
        ]);
    
        $data = $this->customer::create([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
        ]);
    
        return redirect()->back()->with('success', 'Record created successfully!');
    }
    

    public function edit(Customer $customer)
    {
        return response()->json($customer);
    }
    
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'whatsapp' => 'required|numeric|unique:admins,whatsapp,' . $customer->id,
        ]);
    
        // Update the record
        $customer->update([
            'name' => $request->name, // Change to use 'name'
            'whatsapp' => $request->whatsapp,
        ]);
    
        return redirect()->back()->with('success', 'Record updated successfully!');
    }
    
    

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }    
}
