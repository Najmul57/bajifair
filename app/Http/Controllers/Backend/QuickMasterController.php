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
        $data = $this->quickMaster::latest()->get();
        return view('admin.pages.quick-master.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'master_id' => 'required|numeric',
            'whatsapp' => 'required|numeric',
        ]);

        $data = $this->quickMaster::create([
            'master_id' => $request->master_id,
            'whatsapp' => $request->whatsapp,
        ]);

        return redirect()->back()->with('success', 'Record created successfully!');
    }

    public function edit($id)
    {
        $data = $this->quickMaster::findOrFail($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'master_id' => 'required|numeric',
            'whatsapp' => 'required|numeric',
        ]);

        $data = $this->quickMaster::findOrFail($id);
        $data->update([
            'master_id' => $request->master_id,
            'whatsapp' => $request->whatsapp,
        ]);

        return redirect()->back()->with('success', 'Record updated successfully!');
    }


    public function destroy(QuickMaster $quickMaster)
    {
        $quickMaster->delete();
        return redirect()->back()->with('status', 'Record deleted successfully!');
    }
}
