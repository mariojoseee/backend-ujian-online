<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Ujian;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Ujian::where('guru_id', auth('guru')->user()->id)->get());
        return view('admin.layouts.ujian.index_ujian', [
            'title' => "Jenis Ujian",
            'smallTitle' => " - Jenis Ujian",
            'headTitle' => "Jenis Ujian",
            'ujians' => Ujian::where('guru_id', auth('guru')->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.ujian.create_ujian', [
            'title' => "Form Tambah Jenis Ujian",
            'smallTitle' => " - Jenis Ujian",
            'headTitle' => "Create Jenis Ujian",
            'mapels' => Mapel::all(),
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
            'jenis' => 'required|max:50',
            'deskripsi' => 'max:255',
            'kode_ujian' => 'required|unique:ujians|max:10',
            'semester' => 'required|max:6',
            'status' => 'required',
            'waktu' => 'required',
            'mapel_id' => 'required',
            'guru_id' => 'required',
        ]);

        Ujian::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/ujian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        return view('admin.layouts.ujian.edit_ujian', [
            'title' => "Form Ubah Jenis Ujian",
            'smallTitle' => " - Jenis Ujian",
            'headTitle' => "Update Jenis Ujian",
            'ujian' => $ujian,
            'mapels' => Mapel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        $rules = [
            'jenis' => 'required|max:50',
            'deskripsi' => 'max:255',
            'semester' => 'required|max:6',
            'waktu' => 'required',
            'mapel_id' => 'required',
            'guru_id' => 'required',
        ];

        if ($request->kode_ujian != $ujian->kode_ujian) {
            $rules['kode_ujian'] = 'required|unique:ujians|max:10';
        }

        $validatedData = $request->validate($rules);

        // QUERY
        Ujian::where('id', $ujian->id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        return redirect('/ujian');
    }

    public function statusUjian($id)
    {
        $ujian = Ujian::find($id);        
        if($ujian->status == 'Aktif'){
            $ujian->status = 'Nonaktif';
            $ujian->update();
            alert()->success('Status Ujian Nonaktif', 'Berhasil')->toToast();
        } else{
            $ujian->status = 'Aktif';
            $ujian->update();
            alert()->success('Status Ujian Aktif', 'Berhasil')->toToast();
        }
        return redirect('/ujian'); 
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ujian::destroy($id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/ujian');
    }
}
