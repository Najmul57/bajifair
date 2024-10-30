<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index()
    {
        $data = $this->setting->first();
        
        return view('admin.pages.setting.index', compact('data'));
    }
   
    public function update(Request $request, $id)
    {
        $existingSetting = DB::table('settings')->where('id', $id)->first();
    
        $setting = [
            'title' => $request->title,
            'notice' => $request->notice,
            'facebook' => $request->facebook,
            'updated_at' => Carbon::now(),
        ];
    
        if ($request->file('logo')) {
            if ($existingSetting->logo && file_exists(public_path('upload/logo/' . $existingSetting->logo))) {
                unlink(public_path('upload/logo/' . $existingSetting->logo));
            }
            
            $logoFile = $request->file('logo');
            $logoFilename = date('YmdHi') . $logoFile->getClientOriginalName();
            $logoFile->move(public_path('upload/logo'), $logoFilename);
            $setting['logo'] = $logoFilename;
        }
    
        if ($request->file('favicon')) {
            if ($existingSetting->favicon && file_exists(public_path('upload/favicon/' . $existingSetting->favicon))) {
                unlink(public_path('upload/favicon/' . $existingSetting->favicon));
            }
    
            $faviconFile = $request->file('favicon');
            $faviconFilename = date('YmdHi') . $faviconFile->getClientOriginalName();
            $faviconFile->move(public_path('upload/favicon'), $faviconFilename);
            $setting['favicon'] = $faviconFilename;
        }
    
        DB::table('settings')->where('id', $id)->update($setting);
    

        $notification = [
            'message' => 'Settings updated Success!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    
    
     
}
