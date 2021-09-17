<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;

use Illuminate\Http\Request;

class PrivicyController extends Controller {

    public function index() {
        $sitesetting = SiteSetting::first();
        return view('admin.setting.privacypolicy',compact('sitesetting'));
    }
    
    public function update(Request $request, $id) {
        $input = $request->all();
        $sitesetting = SiteSetting::findorfail($id);
        $sitesetting->update($input);
        return redirect()->route('privacypolicy.index')->with('success', 'Privacy Policy updated!');
    }
}
