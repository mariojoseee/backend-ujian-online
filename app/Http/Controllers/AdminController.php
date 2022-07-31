<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.layouts.admin.index_admin', [
            'title' => "Admin",
            'smallTitle' => " - Admin",
            'headTitle' => "Admin",
            'admins' => Admin::all()
        ]);
    }

    public function profileAdmin(Admin $admin)
    {
        return view('admin.layouts.admin.profile_admin', [
            'title' => "Form Edit Profile Admin",
            'smallTitle' => " - Profile Admin",
            'headTitle' => "Profile Admin",
            'angkatan' => $admin
        ]);
    }
}
