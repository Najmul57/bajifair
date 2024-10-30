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
        $data = $this->customer::select('name', 'whatsapp','id','customer_id')->latest()->get();
    
        return view('admin.pages.customer.index', compact('data'));
    }
    
    public function store(Request $request)
    {        
        $request->validate([
            'customer_id' => 'required|numeric|unique:customers,customer_id',
            'name' => 'required',
            'whatsapp' => 'required|numeric|unique:customers,whatsapp',
        ], [
            'customer_id.unique' => 'A record with this ID Number already exists.',
            'name' => 'required',
            'whatsapp.unique' => 'A record with this WhatsApp number already exists.',
        ]);
    
        $data = $this->customer::create([
            'customer_id' => $request->customer_id,
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
        ]);
    
        $notification = [
            'message' => 'Customer Insert Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    

    public function edit(Customer $customer)
    {
        return response()->json($customer);
    }
    
    public function update(Request $request, Customer $customer)
    {
        // $request->validate([
        //     'customer_id' => 'required',
        //     'name' => 'required',
        //     'whatsapp' => 'required|numeric|unique:admins,whatsapp,' . $customer->id,
        // ]);
    
        // Update the record
        $customer->update([
            'customer_id' => $request->customer_id,
            'name' => $request->name, // Change to use 'name'
            'whatsapp' => $request->whatsapp,
        ]);
    
        $notification = [
            'message' => 'Customer Update Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    
    

    public function destroy(Customer $customer)
    {
        $customer->delete();

        $notification = [
            'message' => 'Customer Delete Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }    
}
