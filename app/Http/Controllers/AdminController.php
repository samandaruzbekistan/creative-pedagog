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
                return "success";
            }
            else{
                return back()->with("login_error",1);
            }
        }
        else{
            return back()->with("login_error",1);
        }
        return $request;
    }
}
