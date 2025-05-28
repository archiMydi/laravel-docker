<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    // Public page : Home
    public function index()
    {
        return view('pages.quote-requests');
    }

    // Backoffice : Quotes requests list
    public function adminIndex()
    {
        return view('pages.admin.quote-requests-admin');
    }
}
