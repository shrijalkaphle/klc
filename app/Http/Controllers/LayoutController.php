<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Facts;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\TextBlock;
use App\Models\HomeLayout;
use App\Models\AboutLayout;
use App\Models\PageLayout;
use App\Models\TemplateBlock;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayoutController extends Controller
{
    public function index() {
        $pages = Page::all();
        return view('admin.layout.index',compact('pages'));
    }

    public function edit($page) {
        $layout = null;
        $blocks = TemplateBlock::all();
        $fact = Facts::where(['page' => $page])->first();
        $texts = TextBlock::where(['page' => $page])->get();
        if($page == 'home') {
            $content = HomePage::first();
            $layout = HomeLayout::orderBy('position')->get();
        } else if ($page == 'about') {
            $content = AboutPage::first();
            $layout = AboutLayout::orderBy('position')->get();
        } else {
            $content = null;
            $layout = PageLayout::orderBy('position')->get();
        }
        return view('admin.layout.layout',compact('layout','page','blocks','content','fact','texts'));
    }

    public function updateLayout(Request $request) {
        $page = $request->page;
        $allData = $request->allData;
        $i = 1;
        foreach($allData as $key => $value) {
            if($page == 'home') {
                HomeLayout::where(['id' => $value])->update(['position' => $i]);
            } else {
                AboutLayout::where(['id' => $value])->update(['position' => $i]);
            }
            $i++;
        }
        return response()->json(['data' => $allData]);
    }
    public function addBlock(Request $request) {
        $page = $request->page;
        $id = $request->id;
        $block = TemplateBlock::where(['id' => $id])->first();
        $allData = null;
        if($page == 'home') {
            $layout = HomeLayout::create([
                'title' => strtolower($block->title),
                'position' => '99' 
            ]);
            $allData = HomeLayout::orderBy('position')->get();
        } else if ($page == 'about') {
            $layout = AboutLayout::orderBy('position')->get();
        } else {
            $layout = PageLayout::orderBy('position')->get();
        }
        return response()->json(['data' => $allData]);
    }
    public function deleteBlock(Request $request) {
        $page = $request->page;
        $id = $request->id;
        $allData = null;
        $title = $request->title;
        TextBlock::where([
            'block_position' => $id,
            'page'  =>  $page
        ])->delete();
        if($page == 'home') {
            HomeLayout::where(['id' => $id])->delete();
            $allData = HomeLayout::orderBy('position')->get();
        } else if ($page == 'about') {
            AboutLayout::where(['id' => $id])->delete();
            $allData = HomeLayout::orderBy('position')->get();
        } else {
            PageLayout::where(['id' => $id])->delete();
            $allData = HomeLayout::orderBy('position')->get();
        }
        return response()->json(['data' => $allData]);
    }
    

    public function updateFacts(Request $request) {
        $input=$request->all();
        $facts = Facts::where(['id' => $request->id])->first();
        unset($input['id']);
        if($facts) {
            $facts->update($input);
        } else {
            Facts::create($input);
        }
        return redirect()->back()->with('success', 'facts updated!');
    }

    public function editText($page,$id) {
        $text = TextBlock::where(['block_position' => $id])->first();
        if($text == null) {
            $text = TextBlock::create([
                'page' => $page,
                'block_position' => $id
            ]);
        }
        return view('admin.layout.text.edit',compact('text'));
    }

    public function editFact($page) {
        $fact = Facts::where(['page' => $page])->first();
        if($fact == null) {
            $fact = Facts::create(['page' => $page]);
        }
        return view('admin.layout.facts.edit',compact('fact'));
    }

    public function updateText(Request $request) {
        $input=$request->all();
        $text = TextBlock::where(['id' => $request->id])->first();
        unset($input['id']);
        unset($input['_token']);
        if($text) {
            if($request->file('image')) {
                Storage::disk('public')->delete($text->image);
                $excel = $request->file('image')->store('site-images/textblock', ['disk' => 'public']);
                $path = "site-images/textblock/";
                $newName = uniqid()."." . $request->file('image')->getClientOriginalExtension();
                $newPath = $path . $newName;
                Storage::disk('public')->move($excel, $newPath);
                $input['image'] = $newPath;
            }
            $text->update($input);
        } else {
            if($request->file('image')) {
                $excel = $request->file('image')->store('site-images/textblock', ['disk' => 'public']);
                $path = "site-images/textblock/";
                $newName = uniqid()."." . $request->file('image')->getClientOriginalExtension();
                $newPath = $path . $newName;
                Storage::disk('public')->move($excel, $newPath);
                $input['image'] = $newPath;
            }
            Facts::create($input);
        }
        return redirect()->route('layout.edit',$request->page)->with('success', 'text updated!');
    }
}
