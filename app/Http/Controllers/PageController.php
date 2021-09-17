<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Facts;
use App\Models\MainMenu;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\SiteSetting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller {
    
    public function index() {
        $pages = Page::all();
        $homepage = HomePage::first();
        $aboutpage = AboutPage::first();
        return view('admin.page.index',compact('pages','homepage','aboutpage'));
    }

    public function create() {
        $mainpages = MainMenu::all();
        return view('admin.page.create',compact('mainpages'));
    }

    public function store(Request $request) {
        $input = $request->all();
        $excel = $request->file('image')->store('courses', ['disk' => 'public']);
        $path = "courses/";
        $newName = uniqid()."." . $request->file('image')->getClientOriginalExtension();
        $newPath = $path . $newName;
        Storage::disk('public')->move($excel, $newPath);
        $input['image'] = $newPath;
        $input['slug'] = $this->slugify($request->title);
        if($request->file('banner')) {
            $excel = $request->file('banner')->store('courses', ['disk' => 'public']);
            $path = "courses/";
            $newName = uniqid()."." . $request->file('banner')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['banner'] = $newPath;
        }
        Page::create($input);
        return redirect()->route('pages.index')->with('success','new page ' . $request->title . ' created!');
    }
    
    public function edit($id) {
        $mainpages = MainMenu::all();
        $page = Page::findOrfail($id);
        return view('admin.page.edit',compact('page','mainpages'));
    }

    public function update(Request $request, $id) {
        $page = Page::findOrfail($id);
        $input = $request->all();
        if(!$request->status) {
            $input['status'] = 0;
        }
        if(!$request->footer) {
            $input['footer'] = 0;
        }
        if($request->file('banner')) {
            Storage::disk('public')->delete($page->banner);
            $excel = $request->file('banner')->store('courses', ['disk' => 'public']);
            $path = "courses/";
            $newName = uniqid()."." . $request->file('banner')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['banner'] = $newPath;
        }
        if($request->file('image')) {
            Storage::disk('public')->delete($page->image);
            $excel = $request->file('image')->store('courses', ['disk' => 'public']);
            $path = "courses/";
            $newName = uniqid()."." . $request->file('image')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['image'] = $newPath;
        }
        $input['slug'] = $this->slugify($request->title);
        $page->update($input);
        return redirect()->route('pages.index')->with('success', 'page ' . $request->title . ' updated!');
    }

    public function destroy($id) {
        $page = Page::findOrfail($id);
        Storage::disk('public')->delete($page->image);
        Storage::disk('public')->delete($page->banner);
        $name = $page->title;
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'page ' . $name . ' deleted!');
    }

    public function slugify($text, string $divider = '-') {
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    public function viewpage($slug) {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        try {
            $page = Page::where(['slug' => $slug])->firstOrFail();
        } catch(\Exception $exception) {
            return view('error.404',compact('sitesetting','menus','footerlink'));
        }
        return view('frontend.page',compact('page','sitesetting','menus','footerlink'));
    }
}
