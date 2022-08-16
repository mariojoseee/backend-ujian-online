<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.layouts.login.login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'nuptk' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['nuptk' => $credentials['nuptk'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            // Cek kelengkapan data profil admin
            $profil_admin = Admin::find(auth('admin')->user()->id);
            if (!$profil_admin->nama or !$profil_admin->no_telp) {
                return redirect('/profile-admin');
            }
            return redirect('/dashboard-admin');
        } elseif (Auth::guard('guru')->attempt(['nuptk' => $credentials['nuptk'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            // Cek kelengkapan data profil guru
            $profil_guru = Guru::find(auth('guru')->user()->id);
            if (!$profil_guru->nama or !$profil_guru->no_telp) {
                return redirect('/profile-guru');
            }
            return redirect('/dashboard-guru');
        }
        return back()->with('loginError', 'Login Gagal, Periksa Inputan Data !');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } elseif (Auth::guard('guru')->check()) {
            Auth::guard('guru')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        return redirect('/login-admin-ujian-online');
    }
}
