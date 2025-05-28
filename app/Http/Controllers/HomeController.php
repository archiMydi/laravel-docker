<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Public page : Home
    public function index()
    {
        return view('pages.home');
    }
}
