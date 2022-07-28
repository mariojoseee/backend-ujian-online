<?php

namespace App\Http\Controllers;

use App\Models\Kelaz;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'kelaz_id' => 'required',
            'admin_id' => 'required',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

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
    public function show($id)
    {
        return view('admin.layouts.siswa.create_siswa', [
            'title' => "Form Tambah Siswa",
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
}
