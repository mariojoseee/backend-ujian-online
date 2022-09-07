<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function tampilNilaiSiswa($id)
    {
        return view('users.siswa.nilai-siswa', [
            'nilais' => Nilai::where('siswa_id', $id)->get()
        ]);
    }

    public function simpanNilai(Request $request)
    {
        $validatedData = $request->validate([
            'siswa_id' => 'required',
            'ujian_id' => 'required',
            'nilai' => 'required',
        ]);

        $nilaiTersimpan = Nilai::create($validatedData);
        
        return response()->json([
            'success' => true,
            'message' => "success",
            'nilai' => $nilaiTersimpan
        ]);
    }
    
}
