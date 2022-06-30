<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.jurusan.index_jurusan', [
            'title' => "Jurusan",
            'smallTitle' => " - Jurusan",
            'headTitle' => "Jurusan",
            'jurusans' => Jurusan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.jurusan.create_jurusan', [
            'title' => "Form Tambah Jurusan",
            'smallTitle' => " - Jurusan",
            'headTitle' => "Create Jurusan",
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
            'nama_jurusan' => 'required|max:50',
            'singkatan' => 'required|unique:jurusans|max:50',
        ]);

        Jurusan::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/jurusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan)
    {
        return view('admin.layouts.jurusan.edit_jurusan', [
            'title' => "Form Edit Jurusan",
            'smallTitle' => " - Jurusan",
            'headTitle' => "Update Jurusan",
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $rules = [
            'nama_jurusan' => 'required|max:50'
        ];

        if ($request->singkatan != $jurusan->singkatan) {
            $rules['singkatan'] = 'required|unique:jurusans|max:50';
        }

        $validatedData = $request->validate($rules);

        // QUERY
        Jurusan::where('id', $jurusan->id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        return redirect('/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::destroy($jurusan->id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/jurusan');
    }
}
