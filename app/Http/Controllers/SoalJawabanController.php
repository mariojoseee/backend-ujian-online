<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Ujian;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SoalJawabanController extends Controller
{
    // Index soal berdasarkan id jenis ujian
    public function soalUjian($id)
    {
        return view('admin.layouts.ujian.soal.soal_ujian', [
            'title' => "Data Soal Ujian",
            'smallTitle' => " - Soal Ujian",
            'headTitle' => "Soal Ujian",
            'soals' => Soal::where('ujian_id', $id)->get(),
            'ujian' => Ujian::find($id)
        ]);
    }

    public function storeSoal(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'soal' => 'required',
        ]);

        $validatedData['ujian_id'] = $request->ujian_id;

        Soal::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/ujian/soal-ujian/' . $validatedData['ujian_id']);
    }

    public function editSoal($id)
    {
        return view('admin.layouts.ujian.soal.edit_soal', [
            'title' => "Edit Soal Ujian",
            'smallTitle' => " - Soal Ujian",
            'headTitle' => "Update Soal Ujian",
            'soal' => Soal::find($id),
        ]);
    }

    public function updateSoal(Request $request, $id)
    {
        $validatedData = $request->validate([
            'soal' => 'required',
            'ujian_id' => 'required'
        ]);

        // QUERY
        Soal::where('id', $id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        $soal = Soal::find($id);
        return redirect('/ujian/soal-ujian/' . $soal->ujian_id);
    }

    public function destroySoal($id)
    {
        // ambil id soal
        $soal = Soal::find($id);
        // ambil ujian id berdasarkan id soal pada variabel $soal
        $ujian_id = $soal->ujian_id;

        Soal::destroy($id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/ujian/soal-ujian/' . $ujian_id);
    }

    // Index jawaban berdasarkan id soal
    public function jawabanUjian($id)
    {
        return view('admin.layouts.ujian.jawaban.jawaban_ujian', [
            'title' => "Data Jawaban Ujian",
            'smallTitle' => " - Jawaban Ujian",
            'headTitle' => "Jawaban Ujian",
            // Untuk menampilkan jawaban berdasarkan id_soal yang diambil
            'jawabans' => Jawaban::where('soal_id', $id)->get(),
            // Untuk mengambil semua data soal berdasarkan id soal yang ada pada url
            'soal' => Soal::find($id)
        ]);
    }

    public function storeJawaban(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'jawaban' => 'required',
            'keterangan' => 'required',
            'skor' => 'required|max:2'
        ]);

        $validatedData['soal_id'] = $request->soal_id;

        Jawaban::create($validatedData);
        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect('/ujian/jawaban-ujian/' . $validatedData['soal_id']);
    }

    public function editJawaban($id)
    {
        return view('admin.layouts.ujian.jawaban.edit_jawaban', [
            'title' => "Edit Jawaban Ujian",
            'smallTitle' => " - Jawaban Ujian",
            'headTitle' => "Update Jawaban Ujian",
            'jawaban' => Jawaban::find($id),
        ]);
    }

    public function updateJawaban(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jawaban' => 'required',
            'keterangan' => 'required',
            'skor' => 'required|max:2',
            'soal_id' => 'required',
        ]);

        // QUERY
        Jawaban::where('id', $id)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diupdate !');
        $jawaban = Jawaban::find($id);
        return redirect('/ujian/jawaban-ujian/' . $jawaban->soal_id);
    }

    public function destroyJawaban($id)
    {
        // ambil id jawaban
        $jawaban = Jawaban::find($id);
        // ambil soal id berdasarkan id jawaban pada variabel $jawaban
        $soal_id = $jawaban->soal_id;

        Jawaban::destroy($id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/ujian/jawaban-ujian/' . $soal_id);
    }
}
