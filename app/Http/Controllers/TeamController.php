<?php

namespace App\Http\Controllers;

use App\Models\Team;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller {
    public function index() {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }
    
    public function store(Request $request) {
        $input = $request->all();
        if($file = $request->file('image')){
            $excel = $request->file('image')->store('teams', ['disk' => 'public']);
            $path = "teams/";
            $newName = "team-".uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        Team::create($input);
        return redirect()->route('teams.index')->with('success', 'new team member added!');
    }
    
    public function edit($id) {
        $team = Team::findOrfail($id);
        return view('admin.teams.edit', compact('team'));
    }
    
    public function update(Request $request, $id) {
        $team = Team::findOrfail($id);
        $input = $request->all();
        if($file = $request->file('image')){
            Storage::disk('public')->delete($team->image);
            $excel = $request->file('image')->store('teams', ['disk' => 'public']);
            $path = "teams/";
            $newName = "team-".uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        $team->update($input);
        return redirect()->route('teams.index')->with('success', 'team member updated!');
    }
    
    public function destroy($id) {
        $team = Team::findOrfail($id);
        Storage::disk('public')->delete($team->image);
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'team member deleated!');
    }
}
