<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MasterAgent;
use App\Models\SuperAgent;
use Illuminate\Http\Request;

class MasterAgentController extends Controller
{
    protected $masteragent;
    protected $superagent;

    public function __construct(MasterAgent $masteragent, SuperAgent $superagent)
    {
        $this->masteragent = $masteragent;
        $this->superagent = $superagent;
    }

    public function index()
    {
        $data = $this->masteragent::with('superagent')
            ->select('superagent_id', 'master_agent_name', 'whatsapp', 'id', 'master_agent_id')
            ->latest()
            ->get();

        $superagents = $this->superagent::all();

        return view('admin.pages.masteragent.index', compact('data', 'superagents'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'superagent_id' => 'required|exists:super_agents,id',
            'master_agent_id' => 'required|numeric',
            'master_agent_name' => 'required',
            'whatsapp' => 'required|numeric|unique:subadmins,whatsapp',
        ]);


        $data = $this->masteragent::create([
            'superagent_id' => $request->superagent_id,
            'master_agent_id' => $request->master_agent_id,
            'master_agent_name' => $request->master_agent_name,
            'whatsapp' => $request->whatsapp,
        ]);

        return redirect()->back()->with('success', 'Record created successfully!');
    }


    public function edit(MasterAgent $masterAgent)
    {
        $superagents = $this->superagent::all();
    
        return view('admin.pages.masteragent.edit', compact('masterAgent', 'superagents'));
    }
    

    public function update(Request $request, MasterAgent $masterAgent)
    {
        $request->validate([
            'superagent_id' => 'required|numeric|exists:super_agents,id', // Assumes superagent_id is an ID
            'master_agent_name' => 'required|string',
            'master_agent_id' => 'required|numeric|unique:master_agents,master_agent_id,' . $masterAgent->id,
            'whatsapp' => 'required|numeric|unique:master_agents,whatsapp,' . $masterAgent->id,
        ]);
    
        $masterAgent->update([
            'superagent_id' => $request->superagent_id,
            'master_agent_id' => $request->master_agent_id,
            'master_agent_name' => $request->master_agent_name,
            'whatsapp' => $request->whatsapp,
        ]);
    
        return redirect()->back()->with('success', 'Master Agent updated successfully!');
    }
 
    public function destroy(MasterAgent $masterAgent)
    {
        $masterAgent->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
