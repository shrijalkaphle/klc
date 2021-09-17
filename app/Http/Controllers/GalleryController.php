<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller {

    public function index() {
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }
    
    public function store(Request $request) {
        $input = $request->all();
        if($file = $request->file('image')){
            $excel = $request->file('image')->store('gallery', ['disk' => 'public']);
            $path = "gallery/";
            $newName = "gallery-".uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        Gallery::create($input);
        return redirect()->route('galleries.index')->with('success', 'new image added!');
    }
    
    public function edit($id) {
        $gallery = Gallery::findOrfail($id);
        return view('admin.gallery.edit',compact('gallery'));
    }
    
    public function update(Request $request, $id) {
        $gallery = Gallery::findOrfail($id);
        $input = $request->all();
        if($file = $request->file('image')){
            Storage::disk('public')->delete($gallery->image);
            $excel = $request->file('image')->store('gallery', ['disk' => 'public']);
            $path = "gallery/";
            $newName = "gallery-".uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        $gallery->update($input);
        return redirect()->route('galleries.index')->with('success', 'image in gallery updated!');
    }
    
    public function destroy($id) {
        $gallery = Gallery::findOrfail($id);
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'image from gallery deleted!');
    }
}
