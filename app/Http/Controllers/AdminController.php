<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//nel caso si utilizzi il metodo query builder
use Illuminate\Support\Facades\DB;
//nel caso si utilizzi per le query i models 
use App\Models\Customer;
use Session;



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
        $customers = Customer::paginate(3);
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

    public function editCustomer($id)
     {
         $customer = Customer::find($id);
         return view('amministrazione.editCustomer')->with('customer', $customer);
     }

     public function aggiornaCustomer(Request $request)
     {
         $customer = Customer::find($request->input('id'));
         $customer->email=$request->input('emailUpdate');
         $customer->update();
         // metto in una sessione la scritta utente aggiornato che poi visualizzo in
         //listaUtenti.blade.php
         Session::put('success', 'Utente aggiornato');
         return redirect('/listaUtenti');
     }

     //create & save a new user
     public function salvaUtenti(Request $request)
     {
         $customer = new Customer();
         $customer->email=$request->email_utente;
         $customer->password = md5($request->psw_utente);
         $customer->save();
     
         Session::put('success', 'Utente creato');
        
         return redirect('/creaUtenti');

         // return view('amministrazione.salvaUtenti');
     }
     public function delete($id)
     {
         $customer =   Customer::find($id);
        
         $customer->delete();
         Session::put('success', 'Utente Cancellato');
         return redirect('/listaUtenti');
     }
}




