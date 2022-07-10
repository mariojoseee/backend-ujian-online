<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.layouts.login.login');
    }

    public function postlogin(Request $request){
        // dd($request->all());
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' =>$request->password])){
            return redirect('/');
        }elseif (Auth::guard('guru')->attempt(['email' => $request->email, 'password' =>$request->password])){
            return redirect('/');
        }
        return redirect('/login-admin-ujian-online');
    }

    public function logout(){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }elseif (Auth::guard('guru')->check()){
            Auth::guard('guru')->logout();
        }
        return redirect('/login-admin-ujian-online');
    }
}
