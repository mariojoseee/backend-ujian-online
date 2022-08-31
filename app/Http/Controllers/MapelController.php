<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Ujian;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.mapel.index_mapel', [
            'title' => "Mata Pelajaran",
            'smallTitle' => " - Mata Pelajaran",
            'headTitle' => "Mata Pelajaran",
            'mapels' => Mapel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.mapel.create_mapel', [
            'title' => "Form Tambah Mata Pelajaran",
            'smallTitle' => " - Mata Pelajaran",
            'headTitle' => "Create Mata Pelajaran",
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
            'nama_mapel' => 'required|unique:mapels|max:50'
        ]);

        Mapel::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/mapel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        return view('admin.layouts.mapel.edit_mapel', [
            'title' => "Form Edit Mata Pelajaran",
            'smallTitle' => " - Mata Pelajaran",
            'headTitle' => "Update Mata Pelajaran",
            'mapel' => $mapel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        $rules = [];
        if ($request->nama_mapel != $mapel->nama_mapel) {
            $rules['nama_mapel'] = 'required|unique:mapels|max:50';
        }

        $validatedData = $request->validate($rules);

        // QUERY
        Mapel::where('id', $mapel->id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        return redirect('/mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        Mapel::destroy($mapel->id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/mapel');
    }

    public function tampilMapelSiswa($id)
    {
        return view('users.siswa.mapel-siswa', [
            'ujians' => Ujian::where('mapel_id', $id)->get()
        ]);
    }
}
