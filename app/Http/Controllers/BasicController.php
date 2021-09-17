<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Facts;
use App\Models\Team;
use App\Models\Blogs;
use App\Models\Gallery;
use App\Models\Services;
use App\Models\HomePage;
use App\Models\MainMenu;
use App\Models\TextBlock;
use App\Models\AboutPage;
use App\Models\HomeLayout;
use App\Models\AboutLayout;
use App\Models\SiteSetting;
use App\Models\Testimonial;

use Illuminate\Http\Request;

class BasicController extends Controller {

    public function landing() {
        $teams = Team::all();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        $homepage = HomePage::first();
        $layout = HomeLayout::orderBy('position')->get();
        $fact = Facts::where(['page' => 'home'])->first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        if($homepage === null) {
            $homepage = HomePage::create();
        }
        $blogs = Blogs::orderBy('id','desc')->take(3)->get();
        $about = AboutPage::first();
        if($about === null) {
            $about = AboutPage::create();
        }
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $services = Services::where(['status' => 1])->orderBy('id','desc')->take(4)->get();
        $testimonials = Testimonial::all();
        $texts = TextBlock::where(['page' => 'home'])->get();
        return view('frontend.home',compact('homepage','sitesetting','menus','footerlink','blogs','fact','testimonials','about','layout','services','teams','texts'));
    }

    public function aboutpage() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        $about = AboutPage::first();
        if($about === null) {
            $about = AboutPage::create();
        }
        $fact = Facts::where(['page' => 'about'])->first();
        $layout = AboutLayout::orderBy('position')->get();
        $testimonials = Testimonial::all();
        return view('frontend.about',compact('sitesetting','about','menus','testimonials','layout','fact','footerlink'));
    }

    public function loginpage() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        return view('frontend.login',compact('sitesetting','menus','footerlink'));
    }
    
    public function blogpage() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        $blogs = Blogs::orderBy('id','desc')->paginate(9);
        return view('frontend.blog',compact('sitesetting','menus','blogs','footerlink'));
    }

    public function contactpage() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        return view('frontend.contact',compact('sitesetting','menus','footerlink'));
    }

    public function error() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        return view('error.404',compact('sitesetting','menus','footerlink'));
    }

    public function gallery() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $galleries = Gallery::all();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        return view('frontend.gallery',compact('sitesetting','menus','galleries','footerlink'));
    }

    public function termscondition() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        $data = $sitesetting->termscondition;
        return view('frontend.termscondition',compact('sitesetting','menus','data','footerlink'));
    }
    public function privacypolicy() {
        $footerlink = Page::where(['footer' => 1])->take(5)->get();
        $menus = MainMenu::with('page')->get();
        $sitesetting = SiteSetting::first();
        if($sitesetting === null) {
            $sitesetting = SiteSetting::create();
        }
        $data = $sitesetting->privacypolicy;
        return view('frontend.termscondition',compact('sitesetting','menus','data','footerlink'));
    }
} 