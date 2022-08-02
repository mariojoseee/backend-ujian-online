<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use App\Models\Kelaz;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelazController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.kelaz.index_kelaz', [
            'title' => "Kelas",
            'smallTitle' => " - Kelas",
            'headTitle' => "Kelas",
            'kelazs' => Kelaz::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.kelaz.create_kelaz', [
            'title' => "Form Tambah Kelas",
            'smallTitle' => " - Kelas",
            'headTitle' => "Create Kelas",
            'jurusans' => Jurusan::all(),
            'angkatans' => Angkatan::all()
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
            'nama_kelaz' => 'required|max:10',
            'jurusan_id' => 'required|max:2',
            'angkatan_id' => 'required|max:4',
        ]);

        $kelaz = Kelaz::where('nama_kelaz', $request->nama_kelaz)->where('angkatan_id', $request->angkatan_id)->first();

        if($kelaz){
            Alert::error('Gagal', 'Data yang anda inputkan sudah ada !');
            return redirect('/kelaz/create');
        }

        Kelaz::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/kelaz');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function show(Kelaz $kelaz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelaz $kelaz)
    {
        return view('admin.layouts.kelaz.edit_kelaz', [
            'title' => "Form Edit Kelas",
            'smallTitle' => " - Kelas",
            'headTitle' => "Update Kelas",
            'jurusans' => Jurusan::all(),
            'angkatans' => Angkatan::all(),
            'kelaz' => $kelaz
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelaz $kelaz)
    {
        $rules = [
            'jurusan_id' => 'required|max:2',
            'angkatan_id' => 'required|max:4',
            'nama_kelaz' => 'required|max:10'
        ];

        // if ($request->nama_kelaz != $kelaz->nama_kelaz) {
        //     $rules['nama_kelaz'] = 'required|max:10';
        // }

        $kelaz = Kelaz::where('nama_kelaz', $request->nama_kelaz)->where('angkatan_id', $request->angkatan_id)->first();

        if($kelaz){
            Alert::error('Gagal', 'Data yang anda inputkan sudah ada !');
            return redirect('/kelaz/'.$kelaz->id.'/edit');
        }

        $validatedData = $request->validate($rules);

        // QUERY
        Kelaz::where('id', $kelaz->id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        return redirect('/kelaz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelaz $kelaz)
    {
        Kelaz::destroy($kelaz->id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/kelaz');
    }
}
