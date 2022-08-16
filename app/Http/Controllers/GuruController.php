<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelaz;
use App\Models\Mapel;
use App\Mail\SendEmailGuru;
use App\Models\GuruKelazMapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.guru.index_guru', [
            'title' => "Guru",
            'smallTitle' => " - Guru",
            'headTitle' => "Guru",
            'gurus' => Guru::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Registrasi Akun Siswa
    public function create()
    {
        return view('admin.layouts.guru.create_guru', [
            'title' => "Form Registrasi Akun Guru",
            'smallTitle' => " - Guru",
            'headTitle' => "Create Guru",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nuptk' => 'required|unique:gurus|unique:admins|min:16|max:16',
            'password' => 'required|min:8|max:30',
            'email' => 'required|email|unique:gurus|unique:admins',
            'level' => 'required',
            'admin_id' => 'required',
        ]);

        $password = $request->password;

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Kirim EMAIL
        $data = [
            'title' => 'Akun anda telah terdaftar sebagai Guru pada Website Backend Sistem Informasi Ujian Online SMAN 1 Banjar',
            'nuptk' => $validatedData['nuptk'],
            'email' => $validatedData['email'],
            'password' => $password,
            'url' => 'http://127.0.0.1:8000/login-admin-ujian-online',
        ];
        Mail::to($validatedData['email'])->send(new SendEmailGuru($data));

        Guru::create($validatedData);

        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/guru-smansabar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::destroy($id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/guru-smansabar');
    }

    public function profileGuru(Guru $guru)
    {
        return view('admin.layouts.guru.profile_guru', [
            'title' => "Form Edit Profile Guru",
            'smallTitle' => " - Profile Guru",
            'headTitle' => "Profile Guru",
            'angkatan' => $guru
        ]);
    }

    public function editPasswordGuru()
    {
        return view('admin.layouts.guru.edit_password', [
            'title' => "Form Edit Password Akun Guru",
            'smallTitle' => " - Edit Password",
            'headTitle' => "Edit Password",
        ]);
    }

    public function updatePasswordGuru(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        // Pengecekan password user di database dengan di field current_password 
        if (Hash::check($request->current_password, auth('guru')->user()->password)) {
            // auth('guru')->user()->update(['password' => Hash::make($request->password)]);
            Guru::where('id', auth('guru')->user()->id)->update(['password' => Hash::make($request->password)]);

            Alert::success('Sukses', 'Password anda berhasil dirubah !');
            return back();
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password yang anda masukan tidak sesuai'
        ]);
    }

    // Index kelas dan mapel yang diajar oleh guru berdasarkan id guru
    public function kelazMapel($id)
    {
        // $data_ajar_guru =  Guru::with(['kelazs', 'mapels'])->get();
        return view('admin.layouts.guru.kelaz_mapel', [
            'title' => "Data Kelas dan Mapel yang diajar Guru",
            'smallTitle' => " - Kelas & Mapel Guru",
            'headTitle' => "Soal Ujian",
            'mapels' => Mapel::all(),
            'kelazs' => Kelaz::all(),
            'guru' => Guru::find($id),
            'data_ajar' => GuruKelazMapel::where('guru_id', $id)->get()
        ]);
    }
}
