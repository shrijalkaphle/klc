<?php

namespace App\Http\Controllers;

use App\Models\MainMenu;

use Illuminate\Http\Request;

class MenuController extends Controller {
    
    public function index() {
        $menus = MainMenu::with('page')->orderBy('position')->get();
        return view('admin.menu.index',compact('menus'));
    }
    
    public function update(Request $request, $id) {
        $menu = MainMenu::findorfail($id);
        $input = $request->all();
        $menu->update($input);
        return redirect()->route('mainmenu.index');
    }
    
    public function updatePosition(Request $request) {
        $allData = $request->allData;
        $i = 1;
        foreach($allData as $key => $value) {
            MainMenu::where(['id' => $value])->update(['position' => $i]);
            $i++;
        }
        return response()->json(['data' => $allData]);
    }
}
