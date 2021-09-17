<?php

namespace App\Http\Controllers;

use App\Models\User;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function index() {
        $users = User::all();
        return view('admin.users.view',compact('users'));
    }
    
    public function store(Request $request) {
        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        User::create($input);
        return redirect()->route('users.index')->with('success', 'new user created!');
    }

    public function edit($id) {
        $user = User::findOrfail($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update($id, Request $request) {
        $user = User::findOrfail($id);
        $input['name'] = $request->name;
        $input['username'] = $request->username;
        $input['email'] = $request->email;
        if($request->password) {
            $input['password'] = Hash::make($request->password);
        }
        $user->update($input);
        return redirect()->route('users.index')->with('success', 'user detail updated!');
    }

    public function destroy($id) {
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'user deleted!');
    }

    public function login(Request $request) {
        $username = $request->username;
        $user = User::where(function ($query) use($username) {
            $query->where(['email' => $username])
                ->orWhere(['username' => $username]);
        })->first();
        if($user) {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('user',$user->id);
                return redirect('dashboard');
            } else {
                return redirect()->back()->withErrors(['password' => "Password didn't match!"])->withInput($request->input());
            }
        } else {
            return redirect()->back()->withErrors(['email' => "Email or Username not found!"])->withInput($request->input());
        }
    }

    public function signout() {
        Session::forget('name');
        Session::flush();
        return redirect('/');
    }
}
