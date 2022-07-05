<?php

namespace App\Http\Controllers;

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
            'jurusans' => Jurusan::all()
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
            'nama_kelaz' => 'required|unique:kelazs|max:10',
            'jurusan_id' => 'required|max:2',
        ]);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelaz $kelaz)
    {
        //
    }
}
