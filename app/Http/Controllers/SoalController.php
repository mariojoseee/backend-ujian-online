<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Ujian;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function soalUjian($id)
    {
        return view('admin.layouts.ujian.detail_ujian.soal_ujian', [
            'title' => "Data Soal Ujian",
            'smallTitle' => " - Soal Ujian",
            'headTitle' => "Soal Ujian",
            'soals' => Soal::where('ujian_id', $id)->get(),
            'ujian' => Ujian::find($id)
        ]);
    }
}
