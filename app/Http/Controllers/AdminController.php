<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Page;
use App\Models\Contact;
use App\Models\SiteSetting;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $user = User::count();
        $course = Page::where('subof',3)->count();
        $country = Page::where('subof',4)->count();
        $contacts = Contact::orderBy('id','desc')->get();
        Contact::where(['status' => 1])->update(['status' => 0]);
        return view('admin.dashboard',compact('contacts','user','course','country'));
    }
}
