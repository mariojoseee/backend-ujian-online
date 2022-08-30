<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function tampilNilaiSiswa()
    {
        return view('users.siswa.nilai-siswa');
    }
}
