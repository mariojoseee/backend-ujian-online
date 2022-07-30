<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.layouts.dashboard', [
            'title' => "Dashboard",
            'smallTitle' => "",
            'headTitle' => "Dashboard",
            'admin' => Admin::all(),
            'guru' => Guru::all(),
            'siswa' => Siswa::all(),
        ]);
    }
}
