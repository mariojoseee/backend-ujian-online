<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.layouts.admin.index_admin', [
            'title' => "Admin",
            'smallTitle' => " - Admin",
            'headTitle' => "Admin",
            'admins' => Admin::all()
        ]);
    }

    public function profileAdmin(Admin $admin)
    {
        return view('admin.layouts.admin.profile_admin', [
            'title' => "Form Edit Profile Admin",
            'smallTitle' => " - Profile Admin",
            'headTitle' => "Profile Admin",
            'angkatan' => $admin
        ]);
    }

    public function editPasswordAdmin()
    {
        return view('admin.layouts.admin.edit_password', [
            'title' => "Form Edit Password Akun Admin",
            'smallTitle' => " - Edit Password",
            'headTitle' => "Edit Password",
        ]);
    }

    public function updatePasswordAdmin(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        // Pengecekan password user di database dengan di field current_password 
        if (Hash::check($request->current_password, auth('admin')->user()->password)) {
            // auth('admin')->user()->update(['password' => Hash::make($request->password)]);
            Admin::where('id', auth('admin')->user()->id )->update(['password' => Hash::make($request->password)]);

            Alert::success('Sukses', 'Password anda berhasil dirubah !');
            return back();
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password yang anda masukan tidak sesuai'
        ]);
    }
}
