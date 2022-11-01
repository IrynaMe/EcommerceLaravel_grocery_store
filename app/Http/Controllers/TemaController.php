<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class TemaController extends Controller
{
    public function home()
    {
        return view('front.home');
    }
}
