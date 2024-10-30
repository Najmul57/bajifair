<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\MasterAgent;
use App\Models\QuickMaster;
use App\Models\Subadmin;
use App\Models\SuperAgent;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    //home page
    public function index(){
        $quickmaster=QuickMaster::first();
        return view('frontend.home',compact('quickmaster'));
    }

    // admin page
    public function adminFrontend(){
        $admins=Admin::select('name','whatsapp')->latest()->get();
        return view('frontend.pages.admin',compact('admins'));
    }

    public function subadminFrontend(){
        $admin=Admin::first();
        $subadmins=Subadmin::latest()->get();
        return view('frontend.pages.subadmin',compact('subadmins','admin'));
    }

    public function superFrontend(){
        $admin=Admin::first();
        $supers=SuperAgent::latest()->get();
        return view('frontend.pages.super',compact('supers','admin'));
    }

    public function masterFrontend(){
        $masters=MasterAgent::with('superagent')->get();
        $admin=Admin::first();
        return view('frontend.pages.master',compact('masters','admin'));
    }

    public function customerFrontend(){
        $customer=Customer::latest()->get();
        return view('frontend.pages.customer',compact('customer'));
    }

    public function rulesFrontend(){
        return view('frontend.pages.rules');
    }


    public function search(Request $request)
    {
        $type = $request->input('type');
        $agentId = $request->input('agent');
        $whatsapp = $request->input('whatsapp');
    
        $results = [
            'admins' => collect(),
            'super_agents' => collect(),
            'master_agents' => collect(),
        ];
    
        if ($type === 'admin') {
            $query = Admin::query();
            if ($whatsapp) {
                $query->where('whatsapp', $whatsapp);
            }
            $results['admins'] = $query->get();
        } elseif ($type === 'superagent') {
            $query = SuperAgent::query();
            if ($agentId) {
                $query->where('super_agent_id', $agentId);
            }
            if ($whatsapp) {
                $query->where('whatsapp', $whatsapp);
            }
            $results['super_agents'] = $query->get();
        } elseif ($type === 'masteragent') {
            $query = MasterAgent::query();
            if ($agentId) {
                $query->where('master_agent_id', $agentId);
            }
            if ($whatsapp) {
                $query->where('whatsapp', $whatsapp);
            }
            $results['master_agents'] = $query->get();
        } elseif ($type === 'all') {
            $results['admins'] = Admin::where('whatsapp', $whatsapp)->get();
            $results['super_agents'] = SuperAgent::where('whatsapp', $whatsapp)
                                                 ->orWhere('super_agent_id', $agentId)->get();
            $results['master_agents'] = MasterAgent::where('whatsapp', $whatsapp)
                                                   ->orWhere('master_agent_id', $agentId)->get();
        }
    
        return view('frontend.pages.search_results', compact('results'));
    }
    

}
