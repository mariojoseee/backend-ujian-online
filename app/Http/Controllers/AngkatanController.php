<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AngkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.angkatan.index_angkatan', [
            'title' => "Angkatan",
            'smallTitle' => " - Angkatan",
            'headTitle' => "Angkatan",
            'angkatans' => Angkatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.angkatan.create_angkatan', [
            'title' => "Form Tambah Angkatan",
            'smallTitle' => " - Angkatan",
            'headTitle' => "Create Angkatan",
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
            'tahun' => 'required|unique:angkatans|max:4'
        ]);

        Angkatan::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/angkatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function show(Angkatan $angkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Angkatan $angkatan)
    {
        return view('admin.layouts.angkatan.edit_angkatan', [
            'title' => "Form Edit Angkatan",
            'smallTitle' => " - Angkatan",
            'headTitle' => "Update Angkatan",
            'angkatan' => $angkatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angkatan $angkatan)
    {
        $rules = [];
        if ($request->tahun != $angkatan->tahun) {
            $rules['tahun'] = 'required|unique:angkatans|max:4';
        }

        $validatedData = $request->validate($rules);

        // QUERY
        Angkatan::where('id', $angkatan->id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        return redirect('/angkatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Angkatan $angkatan)
    {
        Angkatan::destroy($angkatan->id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/angkatan');
    }
}
