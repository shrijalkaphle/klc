<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller {
    public function index() {
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = $this->create();
        }
        return view('admin.setting.site-setting', compact('sitesetting'));
    }

    public function create() {
        return SiteSetting::create();
    }
    
    public function update(Request $request, $id) {
        $sitesetting = SiteSetting::findOrfail($id);
        $input = $request->all();
        if($file = $request->file('logo')){
            Storage::disk('public')->delete($sitesetting->logo);
            $excel = $request->file('logo')->store('site-images', ['disk' => 'public']);
            $path = "site-images/";
            $newName = "logo-".uniqid()."." . $request->file('logo')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['logo'] = $newPath;
        }

        if($file = $request->file('favicon')){
            Storage::disk('public')->delete($sitesetting->logo);
            $excel = $request->file('favicon')->store('site-images', ['disk' => 'public']);
            $path = "site-images/";
            $newName = "favicon-".uniqid()."." . $request->file('favicon')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['favicon'] = $newPath;
        }
        $sitesetting->update($input);
        return redirect()->route('site-setting.index')->with('success', 'site detail updated!');
        
    }
}
