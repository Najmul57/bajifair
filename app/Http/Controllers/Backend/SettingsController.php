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
    
        // Handle logo upload
        if ($request->file('logo')) {
            // Check if the existing logo file exists, then delete it
            if ($existingSetting->logo && file_exists(public_path('upload/logo/' . $existingSetting->logo))) {
                unlink(public_path('upload/logo/' . $existingSetting->logo));
            }
            
            $logoFile = $request->file('logo');
            $logoFilename = date('YmdHi') . $logoFile->getClientOriginalName();
            $logoFile->move(public_path('upload/logo'), $logoFilename);
            $setting['logo'] = $logoFilename;
        }
    
        // Handle favicon upload
        if ($request->file('favicon')) {
            // Check if the existing favicon file exists, then delete it
            if ($existingSetting->favicon && file_exists(public_path('upload/favicon/' . $existingSetting->favicon))) {
                unlink(public_path('upload/favicon/' . $existingSetting->favicon));
            }
    
            $faviconFile = $request->file('favicon');
            $faviconFilename = date('YmdHi') . $faviconFile->getClientOriginalName();
            $faviconFile->move(public_path('upload/favicon'), $faviconFilename);
            $setting['favicon'] = $faviconFilename;
        }
    
        // Update the settings record in the database
        DB::table('settings')->where('id', $id)->update($setting);
    
        // Redirect back to the settings page with a success message
        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
    
    
     
}
