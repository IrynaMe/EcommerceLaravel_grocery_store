<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('amministrazione.home');
    }
    public function dashboard()
    {
        return view('amministrazione.dashboard');
    }
    
    public function creaProdotti()
    {
        return view('amministrazione.creaProdotti');
    }
    
    public function listaUtenti()
    {
        return view('amministrazione.listaUtenti');
    }
    public function ordini()
    {
        return view('amministrazione.ordini');
    }

    public function creaUtenti()
    {
        return view('amministrazione.creaUtenti');
    }
}




