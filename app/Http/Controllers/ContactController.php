<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller {
    public function edit($id) {
        $contactpage = ContactPage::findOrfail($id);
        return view('admin.setting.edit.contact',compact('contactpage'));
    }
    
    public function update(Request $request, $id) {
        $contactpage = ContactPage::findOrfail($id);
        $input = $request->all();
        if($request->file('banner')) {
            Storage::disk('public')->delete($contactpage->banner);
            $excel = $request->file('banner')->store('site-images/contact', ['disk' => 'public']);
            $path = "site-images/contact/";
            $newName = uniqid()."." . $request->file('banner')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['banner'] = $newPath;
        }
        $contactpage->update($input);
        return redirect()->route('pages.index')->with('success','contact page updated!');
    }
}
