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

    public function profilAdmin()
    {
        return view('admin.layouts.admin.profil_admin', [
            'title' => "Form Edit Profil Admin",
            'smallTitle' => " - Profil Admin",
            'headTitle' => "Profil Admin",
        ]);
    }

    public function updateProfilAdmin(Request $request)
    {
        $data_admin =  Admin::find(auth('admin')->user()->id);
        $rules = [
            'nuptk' => 'required',
            'nama' => 'required',
        ];

        if ($request->email != $data_admin->email) {
            $rules['email'] = 'required|email:dns|unique:gurus|unique:admins';
        }

        if ($request->no_telp != $data_admin->no_telp) {
            $rules['no_telp'] = 'required|unique:gurus|unique:admins|max:13';
        }

        $validatedData = $request->validate($rules);

        // QUERY
        Admin::where('id', auth('admin')->user()->id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        return back();
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
