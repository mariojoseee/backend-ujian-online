<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Ujian;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SoalJawabanController extends Controller
{
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

    public function jawabanUjian($id)
    {
        return view('admin.layouts.ujian.jawaban.jawaban_ujian', [
            'title' => "Data Jawaban Ujian",
            'smallTitle' => " - Jawaban Ujian",
            'headTitle' => "Jawaban Ujian",
            'jawabans' => Jawaban::where('soal_id', $id)->get(),
            'soal' => Soal::find($id)
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
        return redirect('/ujian/soal-ujian/'.$validatedData['ujian_id']);
    }

    public function destroySoal($id)
    {
        // ambil id soal
        $soal = Soal::find($id);
        // ambil ujian id berdasarkan id soal pada variabel $soal
        $ujian_id = $soal->ujian_id;

        Soal::destroy($id);
        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect('/ujian/soal-ujian/'.$ujian_id);
    }
}
