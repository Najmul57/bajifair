<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Subadmin;
use Illuminate\Http\Request;

class SubAdminController extends Controller
{
    protected $subadmin;
    protected $admin;
    
    public function __construct(Subadmin $subadmin, Admin $admin)
    {
        $this->subadmin = $subadmin;
        $this->admin = $admin;
    }
    

    public function index()
    {
        $data = $this->subadmin::with('admin')
            ->select('admin_id', 'sub_admin', 'whatsapp', 'id')
            ->latest()
            ->get();
        
        $admins = $this->admin::all();
    
        return view('admin.pages.subadmin.index', compact('data', 'admins'));
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'sub_admin' => 'required',
            'admin_id' => 'required|exists:admins,id',
            'whatsapp' => 'required|numeric|unique:subadmins,whatsapp',
        ]);
       
    
        $data = $this->subadmin::create([
            'admin_id' => $request->admin_id,
            'sub_admin' => $request->sub_admin,
            'whatsapp' => $request->whatsapp,
        ]);
    
        $notification = [
            'message' => 'Sub Admin Insert Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    

    public function edit(Subadmin $subadmin)
    {
        $admins = $this->admin::all();
    
        return view('admin.pages.subadmin.edit', compact('subadmin', 'admins'));
    }
    
    
    public function update(Request $request, Subadmin $subadmin)
    {
        $request->validate([
            'sub_admin' => 'required',
            'admin_id' => 'required|exists:admins,id',
            'whatsapp' => 'required|numeric|unique:subadmins,whatsapp,' . $subadmin->id,
        ]);
    
        $subadmin->update([
            'admin_id' => $request->admin_id,
            'sub_admin' => $request->sub_admin,
            'whatsapp' => $request->whatsapp,
        ]);
    
        $notification = [
            'message' => 'Sub Admin Update Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    
    

    public function destroy(Subadmin $subadmin)
    {
        $subadmin->delete();
        
        
        $notification = [
            'message' => 'Sub Admin Delete Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }    
}
