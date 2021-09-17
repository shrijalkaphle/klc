<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller {
    
    public function index() {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.view',compact('testimonials'));
    }
    
    public function store(Request $request) {
        $input = $request->all();
        if($file = $request->file('photo')){
            $excel = $request->file('photo')->store('testimonial', ['disk' => 'public']);
            $path = "testimonial/";
            $newName = "testimonial-".uniqid()."." . $request->file('photo')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['photo'] = $newPath;
        }
        Testimonial::create($input);
        return redirect()->route('testimonial.index')->with('success', 'new testimonal added!');

    }
    
    public function edit($id) {
        $testimonial = Testimonial::findOrfail($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }
    
    public function update(Request $request, $id) {
        $testimonial = Testimonial::findOrfail($id);
        $input = $request->all();
        if($file = $request->file('photo')){
            Storage::disk('public')->delete($testimonial->photo);
            $excel = $request->file('photo')->store('testimonial', ['disk' => 'public']);
            $path = "testimonial/";
            $newName = "testimonial-".uniqid()."." . $request->file('photo')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['photo'] = $newPath;
        }
        $testimonial->update($input);
        return redirect()->route('testimonial.index')->with('success', 'testimonal updated!');
    }
    
    public function destroy($id) {
        $testimonial = Testimonial::findOrfail($id);
        Storage::disk('public')->delete($testimonial->photo);
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'testimonal deleted!');
    }
}
