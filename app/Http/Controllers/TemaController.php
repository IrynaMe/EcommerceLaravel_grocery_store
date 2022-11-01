<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class TemaController extends Controller
{
    public function home()
    {
        return view('front.home');
    }
    public function mail()
    {
        return view('front.mail');
    }
    public function about()
    {
        return view('front.about');
    }
    public function cart()
    {
        return view('front.cart');
        
    }
    public function pagamenti()
    {
        return view('front.pagamenti');
    }
    public function shop()
    {
        return view('front.shop');
    }

    public function login()
    {
        return view('front.login');
    }

    
}
