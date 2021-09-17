<?php

namespace App\Http\Controllers;

use App\Models\HomePage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller {
    
    public function updateHeader(Request $request) {
        $homepage = HomePage::firstorfail();
        $input = $request->all();
        if($request->file('image')) {
            Storage::disk('public')->delete($homepage->image);
            $excel = $request->file('image')->store('site-images/home', ['disk' => 'public']);
            $path = "site-images/home/";
            $newName = uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        $homepage->update($input);
        return redirect()->back()->with('success','home page updated!');
    }
}
