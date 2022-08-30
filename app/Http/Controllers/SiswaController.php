<?php

namespace App\Http\Controllers;

use App\Models\Kelaz;
use App\Models\Siswa;
use App\Mail\SendEmailSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.siswa.index_siswa', [
            'title' => "Siswa",
            'smallTitle' => " - Siswa",
            'headTitle' => "Siswa",
            'siswas' => Siswa::orderBy('nama', 'ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function pilih_kelaz()
    {
        return view('admin.layouts.siswa.pilih_kelaz', [
            'title' => "Pilih Kelas Untuk Tambah Siswa",
            'smallTitle' => " - Siswa",
            'headTitle' => "Pilih Kelas",
            'kelazs' => Kelaz::all()
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
        // return request()->all();

        $validatedData = $request->validate([
            'nis' => 'required|unique:siswas|min:5|max:5',
            'password' => 'required|min:8|max:30',
            'email' => 'required|email|unique:siswas|unique:gurus|unique:admins',
            'kelaz_id' => 'required',
            'admin_id' => 'required',
        ]);

        $password = $request->password;

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Kirim EMAIL
        $data = [
            'title' => 'Akun anda telah terdaftar sebagai siswa pada Website Ujian Online SMAN 1 Banjar',
            'nis' => $validatedData['nis'],
            'email' => $validatedData['email'],
            'password' => $password,
            'url' => 'http://127.0.0.1:8000/login',
        ];
        Mail::to($validatedData['email'])->send(new SendEmailSiswa($data));

        Siswa::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/siswa-smansabar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Registrasi Akun Siswa
    public function show($id)
    {
        return view('admin.layouts.siswa.create_siswa', [
            'title' => "Form Registrasi Akun Siswa",
            'smallTitle' => " - Siswa",
            'headTitle' => "Create Siswa",
            'kelaz' => Kelaz::find($id)
        ]);
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
        Siswa::destroy($id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/siswa-smansabar');
    }

    // public function profilSiswa()
    // {
    //     return view('users.siswa.editprofile-siswa', [
    //         'title' => "Form Edit Profile Siswa",
    //         'smallTitle' => " - Profil Siswa",
    //         'headTitle' => "Profil Siswa",
    //     ]);
    // }

    // public function updateProfilSiswa(Request $request)
    // {
    //     $data_siswa =  Siswa::find(auth('siswa')->user()->id);
    //     $rules = [
    //         'nis' => 'required',
    //         'nama' => 'required',
    //     ];

    //     if ($request->email != $data_siswa->email) {
    //         $rules['email'] = 'required|email:dns|unique:siswas';
    //     }

    //     if ($request->no_telp != $data_siswa->no_telp) {
    //         $rules['no_telp'] = 'required|unique:siswas|max:13';
    //     }

    //     $validatedData = $request->validate($rules);

    //     // QUERY
    //     Siswa::where('id', auth('siswa')->user()->id)->update($validatedData);

    //     Alert::success('Sukses', 'Data berhasil diupdate !');
    //     return back();
    // }
}
