<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
    public function create()
    {
        return view('admin.layouts.guru.create_guru', [
            'title' => "Form Tambah Guru",
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

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $data = [
            'title' => 'Akun anda telah terdaftar sebagai Guru pada Website Backend Sistem Informasi Ujian Online SMAN 1 Banjar',
            'nuptk' => $validatedData['nuptk'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'url' => 'http://127.0.0.1:8000/login-admin-ujian-online',
        ];
        Mail::to($validatedData['email'])->send(new SendMail($data));

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
}
