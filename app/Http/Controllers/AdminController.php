<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

//nel caso si utilizzi il metodo query builder
use Illuminate\Support\Facades\DB;
//nel caso si utilizzi per le query i models 
use App\Models\Customer;
use App\Models\Product;
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
        // in php e corrisponde a query select all from...
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
     public function salvaProdotto(Request $request) {
        $fileName= $request->file('uploadfile')->getClientOriginalName();
        //print($fileName);
        //print($request->input('categoria'));

        //se ho caricato un file con il selettore name='uploadfile'
        if ($request->hasFile('uploadfile')) {
            //carica il file nella cartella temporanea
            $path=$request->file('uploadfile')->storeAs('public/img_prodotto', $fileName);
            //print($path);
            //path=public/img_prodotto/cipolla.png 
            $file = $request->file('uploadfile');
            //print($file);
            //private/var/tmp/phpigtvGL
            //definisco il path finale
            $path = public_path().'/tema/images';
            $uplaod = $file->move($path, $fileName);
           
        } else {
            $fileName ='nessunaImg.jpg';
        }

        //uso il metdo Model e non DB Query
        $product = new Product();
        $product->name = $request->input('nome');
        $product->description = $request->input('editor1');
        $product->price= $request->input('prezzo');
        $product->discount= $request->input('sconto');
        $product->category = $request->input('categoria');
        $product->image= 'images/'.$fileName;
        $product ->save();
        //sessione per messaggio Prodotto Salvato
        Session::put('success', 'Prodotto Salvato');
        return back();
        print($fileName);

     }

     public function listaProdotti()
     {
        /*  return view('amministrazione.listaUtenti');*/
         //$customers = Customer::all();
         //$customers = Customer::orderBy('email', 'asc')->get();
         //$customers = Customer::orderBy('email', 'asc')->paginate(2);
         // in php e corrisponde a query select all from...
         $products = Product::paginate(10);
         return view('amministrazione.listaProdotti')->with('products', $products);
     } 
}




