<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $admin;

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function index()
    {
        $data = $this->admin::select('name', 'whatsapp','id')->latest()->get();
    
        return view('admin.pages.admin.index', compact('data'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'whatsapp' => 'required|numeric|unique:admins,whatsapp',
        ]);
    
        $data = $this->admin::create([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
        ]);
    
        return redirect()->back()->with('success', 'Record created successfully!');
    }
    

    public function edit(Admin $admin)
    {
        return response()->json($admin);
    }
    
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'whatsapp' => 'required|numeric|unique:admins,whatsapp,' . $admin->id,
        ]);
    
        // Update the record
        $admin->update([
            'name' => $request->name, // Change to use 'name'
            'whatsapp' => $request->whatsapp,
        ]);
    
        return redirect()->back()->with('success', 'Record updated successfully!');
    }
    
    

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }    
    
}
