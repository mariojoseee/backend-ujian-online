<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\GuruKelazMapel;

class DashboardController extends Controller
{
    public function dashboardGuru()
    {
        return view('admin.layouts.dashboard_guru', [
            'title' => "Dashboard",
            'smallTitle' => "",
            'headTitle' => "Dashboard",
            'data_ajar' => GuruKelazMapel::where('guru_id', auth('guru')->user()->id)->get()
        ]);
    }

    public function dashboardAdmin()
    {
        return view('admin.layouts.dashboard_admin', [
            'title' => "Dashboard",
            'smallTitle' => "",
            'headTitle' => "Dashboard",
            'admin' => Admin::all(),
            'guru' => Guru::all(),
            'siswa' => Siswa::all(),
        ]);
    }
}
