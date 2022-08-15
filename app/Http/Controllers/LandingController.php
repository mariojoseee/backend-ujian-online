<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        return view('users.layouts.fitur');
    }

    public function landingabout()
    {
        return view('users.layouts.about');
    }
}
