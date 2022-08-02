<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.layouts.login.login');
    }

    public function postlogin(Request $request){
        // dd($request->all());

        $credentials = $request->validate([
            'nuptk' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['nuptk' => $credentials['nuptk'], 'password' => $credentials['password']])){
            $request->session()->regenerate();
            return redirect('/');
        }elseif (Auth::guard('guru')->attempt(['nuptk' => $credentials['nuptk'], 'password' => $credentials['password']])){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->with('loginError', 'Login Gagal, Periksa Inputan Data !');
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
