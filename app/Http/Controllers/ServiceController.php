<?php

namespace App\Http\Controllers;

use App\Models\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $services = Services::all();
        return view('admin.services.index',compact('services'));
    }
    
    public function store(Request $request) {
        $input = $request->all();
        if($file = $request->file('image')){
            $excel = $request->file('image')->store('services', ['disk' => 'public']);
            $path = "services/";
            $newName = "service-".uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        Services::create($input);
        return redirect()->route('services.index')->with('success', 'new service created!');
    }

    public function edit($id) {
        $service = Services::findOrfail($id);
        return view('admin.services.edit',compact('service'));
    }
    
    public function update(Request $request, $id) {
        $service = Services::findOrfail($id);
        $input = $request->all();
        if($file = $request->file('image')){
            Storage::disk('public')->delete($service->image);
            $excel = $request->file('image')->store('services', ['disk' => 'public']);
            $path = "services/";
            $newName = "service-".uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        $service->update($input);
        return redirect()->route('services.index')->with('success', 'service updated!');
    }

    public function destroy($id) {
        $service = Services::findOrfail($id);
        Storage::disk('public')->delete($service->image);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'service deleted!');
    }
}
