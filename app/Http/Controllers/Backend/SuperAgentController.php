<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuperAgent;
use App\Models\Admin;
use Illuminate\Http\Request;

class SuperAgentController extends Controller
{
    protected $superagent;
    protected $admin;

    public function __construct(SuperAgent $superagent, Admin $admin)
    {
        $this->superagent = $superagent;
        $this->admin = $admin;
    }


    public function index()
    {
        $data = $this->superagent::with('admin')
            ->select('admin_id', 'super_agent_name', 'whatsapp', 'id', 'super_agent_id')
            ->latest()
            ->get();

        $admins = $this->admin::all();

        return view('admin.pages.superagent.index', compact('data', 'admins'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'admin_id' => 'required',
            'super_agent_id' => 'required|numeric|unique:super_agents,super_agent_id',
            'super_agent_name' => 'required',
            'whatsapp' => 'required|numeric|unique:super_agents,whatsapp',
        ]);


        $data = $this->superagent::create([
            'admin_id' => $request->admin_id,
            'super_agent_id' => $request->super_agent_id,
            'super_agent_name' => $request->super_agent_name,
            'whatsapp' => $request->whatsapp,
        ]);

        $notification = [
            'message' => 'Super Agent Insert Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }


    public function edit(SuperAgent $superAgent)
    {
        $admins = $this->admin::all();

        return view('admin.pages.subadmin.edit', compact('superAgent', 'admins'));
    }

    public function update(Request $request, SuperAgent $superAgent)
    {
        // $request->validate([
        //     'super_agent_id' => 'required|numeric|unique:super_agents,super_agent_id,' . $superAgent->id,
        //     'super_agent_name' => 'required|string',
        //     'admin_id' => 'required|exists:admins,id',
        //     'whatsapp' => 'required|numeric|unique:super_agents,whatsapp,' . $superAgent->id,
        // ]);

        $superAgent->update([
            'admin_id' => $request->admin_id,
            'super_agent_id' => $request->super_agent_id,
            'super_agent_name' => $request->super_agent_name,
            'whatsapp' => $request->whatsapp,
        ]);

        $notification = [
            'message' => 'Super Agent Update Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }



    public function destroy(SuperAgent $superAgent)
    {
        // Check if there are related MasterAgents
        if ($superAgent->masterAgents()->count() > 0) {
            $notification = [
                'message' => 'Cannot delete Super Agent. There are related Master Agents.',
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }
    
        $superAgent->delete();
    
        $notification = [
            'message' => 'Super Agent Delete Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    
}
