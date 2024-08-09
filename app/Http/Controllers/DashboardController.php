<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function overview()
    {
        return view('dashboard.overview');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function support()
    {
        return view('dashboard.support');
    }
}
