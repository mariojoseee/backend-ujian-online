<?php

namespace App\Http\Controllers;

use App\Models\Kelaz;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Ujian;
use Illuminate\Http\Request;
use App\Models\GuruKelazMapel;

class LaporanController extends Controller
{
    // Tampilan Awal Menu Laporan Actor Guru
    public function indexLaporanDataAjar()
    {
        return view('admin.layouts.laporan-guru.laporan_data_ajar', [
            'title' => "Laporan Data Ajar Guru",
            'smallTitle' => " - Laporan",
            'headTitle' => "Laporan",
            'data_ajars' => GuruKelazMapel::where('guru_id', auth('guru')->user()->id)->get()
        ]);
    }

    // Nampilin Laporan Nilai Siswa Actor Guru
    public function indexLaporanGuru($id)
    {
        $guru_kelaz_mapel = GuruKelazMapel::find($id);
        $siswas = Siswa::where('kelaz_id', $guru_kelaz_mapel->kelaz_id)->get();

        $ujians = Ujian::where('mapel_id', $guru_kelaz_mapel->mapel_id)->get();
        $ujian_id = array();

        foreach ($ujians as $ujian) {
            $ujian_id[] = $ujian->id;
        }

        if (!count($ujian_id)) {
            $ujian_id[] = 0;
        }

        foreach ($siswas as $key => $siswa) {
            $nilai_sementara = Nilai::where('siswa_id', $siswa->id)->get();
            $nilai_mapel_ini = $nilai_sementara->whereIn('ujian_id', $ujian_id);
            $siswas[$key]->listnilai = $nilai_mapel_ini;
        }
        // dd($ujian_id, $ujians, $guru_kelaz_mapel);

        return view('admin.layouts.laporan-guru.laporan_nilai', [
            'title' => "Laporan Data Nilai Ujian",
            'smallTitle' => " - Laporan",
            'headTitle' => "Laporan",
            'data_ajars' => GuruKelazMapel::find($id),
            'siswas' => $siswas
        ]);
    }

    public function indexLaporanPrint($id)
    {
        $guru_kelaz_mapel = GuruKelazMapel::find($id);
        $siswas = Siswa::where('kelaz_id', $guru_kelaz_mapel->kelaz_id)->get();

        $ujians = Ujian::where('mapel_id', $guru_kelaz_mapel->mapel_id)->get();
        $ujian_id = array();

        foreach ($ujians as $ujian) {
            $ujian_id[] = $ujian->id;
        }

        if (!count($ujian_id)) {
            $ujian_id[] = 0;
        }

        foreach ($siswas as $key => $siswa) {
            $nilai_sementara = Nilai::where('siswa_id', $siswa->id)->get();
            $nilai_mapel_ini = $nilai_sementara->whereIn('ujian_id', $ujian_id);
            $siswas[$key]->listnilai = $nilai_mapel_ini;
        }
        // dd($ujian_id, $ujians, $guru_kelaz_mapel);
        
        return view('admin.layouts.laporan-guru.laporan_print', [
            'title' => "Laporan Data Nilai Ujian",
            'smallTitle' => " - Laporan",
            'headTitle' => "Laporan",
            'data_ajars' => GuruKelazMapel::find($id),
            'siswas' => $siswas
        ]);
    }
}
