<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaLoginController extends Controller
{
    public function index()
    {
        return view('users.login');
    }

    public function postloginsiswa(Request $request){
        // dd($request->all());

        $credentials = $request->validate([
            'nis' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('siswa')->attempt(['nis' => $credentials['nis'], 'password' => $credentials['password']])){
            $request->session()->regenerate();
            return redirect('/halaman-siswa');
        }
        return back()->with('loginError', 'Login Gagal, Email & Password Salah !');
    }

    public function logoutsiswa(Request $request){
        if(Auth::guard('siswa')->check()){
            Auth::guard('siswa')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        return redirect('/login-siswa');
    }

   //update password-siswa
    public function editPasswordSiswa()
    {
        return view('users.siswa.editpassword', [
            'title' => "Form Edit Password Akun Siswa",
            'smallTitle' => " - Edit Password",
            'headTitle' => "Edit Password",
        ]);
    }

    public function updatePasswordSiswa(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        // Pengecekan password user di database dengan di field current_password 
        if (Hash::check($request->current_password, auth('siswa')->user()->password)) {

            Siswa::where('id', auth('siswa')->user()->id )->update(['password' => Hash::make($request->password)]);

            Alert::success('Sukses', 'Password anda berhasil dirubah !');
            return back();
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password yang anda masukan tidak sesuai'
        ]);
    }
}
