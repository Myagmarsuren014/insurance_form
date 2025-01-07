<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function daatgal_form(Request $request)
    {
        return view('pages.daatgal.form');
    }

    public function daatgal_next(Request $request)
    {
        return view('pages.daatgal.next');
    }
}
