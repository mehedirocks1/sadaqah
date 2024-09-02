<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function donate()
    {
        return view('frontend.donate');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
