<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\QuickMaster;
use Illuminate\Http\Request;

class QuickMasterController extends Controller
{

    protected $quickMaster;

    public function __construct(QuickMaster $quickMaster)
    {
        $this->quickMaster = $quickMaster;
    }

    public function index()
    {
        $data = $this->quickMaster::select('master_id', 'whatsapp', 'id')->latest()->get();

        return view('admin.pages.quick-master.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'master_id' => 'required|numeric|unique:quick_masters,master_id',
            'whatsapp' => 'required|numeric|unique:quick_masters,whatsapp',
        ], [
            'master_id.unique' => 'A record with this Master ID already exists.',
            'whatsapp.unique' => 'A record with this WhatsApp number already exists.',
        ]);
    
        $data = $this->quickMaster::create([
            'master_id' => $request->master_id,
            'whatsapp' => $request->whatsapp,
        ]);
    
        $notification = [
            'message' => 'Quick Master Insert Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    
    public function edit(QuickMaster $quickMaster)
    {
        return response()->json($quickMaster);
    }

    public function update(Request $request, QuickMaster $quickMaster)
    {
        // $request->validate([
        //     'master_id' => 'required|numeric|unique:quick_masters,master_id,' . $quickMaster->id,
        //     'whatsapp' => 'required|numeric|unique:quick_masters,whatsapp,' . $quickMaster->id,
        // ]);

        $quickMaster->update([
            'master_id' => $request->master_id,
            'whatsapp' => $request->whatsapp,
        ]);

        $notification = [
            'message' => 'Quick Master Update Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }



    public function destroy(QuickMaster $quickMaster)
    {
        $quickMaster->delete();
        $notification = [
            'message' => 'Quick Master Delete Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
}
