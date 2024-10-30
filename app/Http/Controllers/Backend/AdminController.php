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
    
        $notification = [
            'message' => 'Admin Insert Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
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
    
        $notification = [
            'message' => 'Admin Update Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    

    public function destroy(Admin $admin)
    {
        if ($admin->subadmins()->exists()) {
            return redirect()->back()->with([
                'message' => 'Cannot delete this admin as they have associated sub-admins.',
                'alert-type' => 'error'
            ]);
        }
    
        if ($admin->superagents()->exists()) {
            return redirect()->back()->with([
                'message' => 'Cannot delete this admin as they have associated super agents.',
                'alert-type' => 'error'
            ]);
        }
    
        $admin->delete();
        
        return redirect()->back()->with([
            'message' => 'Admin deleted successfully!',
            'alert-type' => 'success'
        ]);
    }
    
      
    
}
