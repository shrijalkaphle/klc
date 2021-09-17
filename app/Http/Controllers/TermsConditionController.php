<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;

use Illuminate\Http\Request;

class TermsConditionController extends Controller {
    
    public function index() {
        $sitesetting = SiteSetting::first();
        return view('admin.setting.termscondition',compact('sitesetting'));
    }
    
    public function update(Request $request, $id) {
        $input = $request->all();
        $sitesetting = SiteSetting::findorfail($id);
        $sitesetting->update($input);
        return redirect()->route('termscondition.index')->with('success', 'terms and condition updated!');
    }
}
