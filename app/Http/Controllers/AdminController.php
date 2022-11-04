<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//nel caso si utilizzi il metodo query builder
use Illuminate\Support\Facades\DB;
//nel caso si utilizzi per le query i models 
use App\Models\Customer;



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
       /*  return view('amministrazione.listaUtenti');*/
        //$customers = Customer::all();
        //$customers = Customer::orderBy('email', 'asc')->get();
        //$customers = Customer::orderBy('email', 'asc')->paginate(2);
        $customers = Customer::paginate(1);
        return view('amministrazione.listaUtenti')->with('customers', $customers);
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




