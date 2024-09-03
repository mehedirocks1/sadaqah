<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }

    public function users()
    {
        return view('backend.users');
    }

    public function settings()
    {
        return view('backend.settings');
    }
}
