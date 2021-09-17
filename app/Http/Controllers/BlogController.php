<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Blogs;
use App\Models\MainMenu;
use App\Models\BlogComment;
use App\Models\SiteSetting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller {
    public function index() {
        $blogs = Blogs::orderBy('id','desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function store(Request $request) {
        $input = $request->all();
        $slug = $this->slugify($request->title);
        $input['slug'] = $slug;
        if($file = $request->file('cover')){
            $excel = $request->file('cover')->store('blogs', ['disk' => 'public']);
            $path = "blogs/";
            $newName = "blog-".uniqid()."." . $request->file('cover')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['cover'] = $newPath;
        }

        Blogs::create($input);
        return redirect()->route('blogs.index')->with('success', 'new blog post!');
    }
    
    public function update($id, Request $request) {
        $blog = Blogs::findOrfail($id);
        $input = $request->all();
        $slug = $this->slugify($request->title);
        $input['slug'] = $slug;
        if($file = $request->file('cover')){
            Storage::disk('public')->delete($blog->cover);
            $excel = $request->file('cover')->store('blogs', ['disk' => 'public']);
            $path = "blogs/";
            $newName = "blog-".uniqid()."." . $request->file('cover')->getClientOriginalExtension();
            $newPath = $path . $newName;
            Storage::disk('public')->move($excel, $newPath);
            $input['cover'] = $newPath;
        }
        $blog->update($input);
        return redirect()->route('blogs.index')->with('success', 'blog post updated!');
    }

    public function destroy($id) {
        $blog = Blogs::findOrfail($id);
        Storage::disk('public')->delete($blog->cover);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'blog post deleted!');
    }

    public function edit($id) {
        $blog = Blogs::findOrfail($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    public function blogview($slug) {
      	$footerlink = Page::where(['footer' => 1])->take(5)->get();
      	$menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        $recentblogs = Blogs::orderBy('id','desc')->take(5)->get();
        $blog = Blogs::where(['slug' => $slug])->first();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = $this->create();
        }
        $pages = Page::all();
        return view('frontend.single-blog',compact('sitesetting','pages','blog','recentblogs','menus','footerlink'));
    }

    public function addcomment(Request $request) {
        $input = $request->all();
        BlogComment::create($input);
        return redirect()->back();
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
}
