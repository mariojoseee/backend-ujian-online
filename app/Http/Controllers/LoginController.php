<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.layouts.login.login', [
            'title' => "Dashboard",
            'smallTitle' => "",
            'headTitle' => "Dashboard"
        ]);
    }
}
