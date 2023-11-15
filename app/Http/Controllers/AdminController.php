<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function auth(Request $request){
        $request->validate([
            'username' => "required|string",
            'password' => "required|string",
        ]);
        $admin = Admin::where('username', $request->username)->first();
        if (!empty($admin)){
            if ($admin->password == $request->password){
                session()->put('admin',1);
                session()->put('fullname',$admin->fullname);
                return redirect()->route('admin.home');
            }
            else{
                return back()->with("login_error",1);
            }
        }
        else{
            return back()->with("login_error",1);
        }
    }

    public function home(){
        if (session('admin') == 1){
            return "home";
        }
        else{
            return redirect()->route('admin.login');
        }
    }
}
