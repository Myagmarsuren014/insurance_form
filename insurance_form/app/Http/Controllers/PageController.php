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
<<<<<<< HEAD
=======

    public function daatgal_next2(Request $request)
    {
        return view('pages.daatgal.next2');
    }
    
>>>>>>> 919cfe965014b8baf4e1f9258c44b38c29b7cec9
    public function daatgal_purchase(Request $request)
    {
        return view('pages.daatgal.purchase');
    }
    public function daatgal_qpay(Request $request)
    {
        return view('pages.daatgal.qpay');
    }
    public function daatgal_verified (Request $request)
    {
        return view('pages.daatgal.verified');
    }
}
