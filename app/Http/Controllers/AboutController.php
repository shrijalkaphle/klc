<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Country;
use App\Models\AboutPage;
use App\Models\SiteSetting;
use App\Models\Testimonial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller {
    
    public function updateAbout(Request $request) {
        $page = AboutPage::firstorfail();
        $input = $request->all();
        if($request->file('image')) {
            Storage::disk('public')->delete($page->image);
            $excel = $request->file('image')->store('site-images/about', ['disk' => 'public']);
            $path = "site-images/about/";
            $newName = uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        $page->update($input);
        return redirect()->back()->with('success','about page updated!');
    }
}
