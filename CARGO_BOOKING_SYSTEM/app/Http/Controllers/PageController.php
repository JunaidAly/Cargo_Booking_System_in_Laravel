<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function office()
    {
        return view('pages.office');
    }

    public function price()
    {
        return view('pages.price');
    }

    public function customer()
    {
        return view('pages.customer');
    }
}
