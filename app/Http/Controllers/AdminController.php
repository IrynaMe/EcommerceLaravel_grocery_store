<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//nel caso si utilizzi il metodo query builder
use Illuminate\Support\Facades\DB;
//nel caso si utilizzi per le query i models
use App\Models\Customer;
use App\Models\Product;
use App\Models\Amministratore;
//uso dele sessioni
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
        // return view('amministrazione.listaUtenti');

        //torna il risiultato della query organizzato per pagina
        //1 = un record per ogni pagination
        //equivale PHP a
        $customers = Customer::paginate(4);
        //ritorna la vista aggiungendo il risultato della query $customer
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
        //trovare tutte le info (email e id) del record che ha id =$id (quello che ho passato)
        //ritorna queste info a una pagina che si chiama amministrazione/editCustomer.blade.php
        //In amministrazione.editCustomer ci sarà il campo di di input

        $customer = Customer::find($id);
        return view('amministrazione.editCustomer')->with('customer', $customer);
    }

    public function aggiornaCustomer(Request $request)
    {
        //deve catturare le info id, email aggiornata
        //deve eseguire una query update nel DB
        // deve tornare a listaUtenti che esehuirà una query sul DB dove il record è stato aggiornato
        // mette in una sessione che ha nome sucess il valore: Utente aggiornato

        //catturano il dato
        $customer = Customer::find($request->input('id'));
        $customer->email=$request->input('emailUpdate');

        //esegue update nel BD
        $customer->update();

        // mette in una sessione chiamata success il valore utente aggiornato
        // questo valore viene visualizzato in listaUtenti
        //NB usare use Session;

        Session::put('success', 'Utente aggiornato');

        //ritorna alla lista utenti dove viene eseguita la query
        //con i dati aqggiornati
        return redirect('/listaUtenti');
    }

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
        $customer = Customer::find($id);

        $customer->delete();
        Session::put('success', 'Utente Cancellato');
        return redirect('/listaUtenti');
    }

    public function loginAmmre(Request $request)
    {
        $this->validate($request, ['email' => 'email|required',
                                   'password' => 'required' ]);

        $Amministratore  = Amministratore::where('email', $request->input('email'))->first();

        if ($Amministratore) {
            $password=md5($request->input('password'));
            echo $password."<br>";
            $passwordDB= ($Amministratore->password);
            echo $passwordDB;
            if ($password == $passwordDB) {
                Session::put('amministratore', $Amministratore);
                // echo 'passo da qui';
       
                return redirect('/dashboard');
               
        
                
            } else {
                return back()->with('status', 'Email o password non corretta');
            }
        } else {
            return back()->with('status', 'Non hai un account con questa email');
        }
    }

    public function salvaProdotto(Request $request)
    {
      //
        $fileName= $request->file('uploadfile')->getClientOriginalName();

        //test che immagine abbia il nome corretto e categoria il numero
        //indicato in categoria
        // $fileName = cipolla.png
        //  print($fileName);
        //   print($request->input('categoria'));

        /*   se ho caricato un file che al suo interno contiene
         name="uploadfile"  */
        if ($request->hasFile('uploadfile')) {
            //ho caricato il file

//
            $path=$request->file('uploadfile')->storeAs('public/img_prodotto', $fileName);
            //$path= public/img_prodotto/cipolla.png
            // print($path);

            $file = $request->file('uploadfile');
            // print($file);
            $path = public_path().'/tema/images';
            $uplaod = $file->move($path,$fileName);
        } else {
            $fileName ='nessuna Immagine';
        }

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
        // print($fileName);

    }

    
    public function listaProdotti()
    {
        // return view('amministrazione.listaProdotti');

        //torna il risiultato della query organizzato per pagina
        //1 = un record per ogni pagination
        //equivale PHP a
        $products = Product::paginate(10);
        //ritorna la vista aggiungendo il risultato della query $customer
        return view('amministrazione.listaProdotti')->with('products', $products );
    }

    
    public function editProduct($id)
    {
        //trovare tutte le info (email e id) del record che ha id =$id (quello che ho passato)
        //ritorna queste info a una pagina che si chiama amministrazione/editCustomer.blade.php
        //In amministrazione.editProduct ci sarà il campo di di input

        $product = Product::find($id);
        return view('amministrazione.editProduct')->with('product', $product);
    }

    public function aggiornaProduct(Request $request)
    {
        //deve catturare le info id, email aggiornata
        //deve eseguire una query update nel DB
        // deve tornare a listaUtenti che esehuirà una query sul DB dove il record è stato aggiornato
        // mette in una sessione che ha nome sucess il valore: Utente aggiornato

        //catturano il dato
        $product = Product::find($request->input('id'));
        $product->name=$request->input('nomeUpdate');
        $product->description=$request->input('descUpdate');


        //esegue update nel BD
        $product->update();

        // mette in una sessione chiamata success il valore utente aggiornato
        // questo valore viene visualizzato in listaUtenti
        //NB usare use Session;

        Session::put('success', 'Prodotto aggiornato');

        //ritorna alla lista utenti dove viene eseguita la query
        //con i dati aqggiornati
        return redirect('/listaProdotti');
    }




    public function deleteProduct($id)
    {
        $Product =  Product::find($id);

        $Product->delete();
        Session::put('success', 'Prodotto Cancellato');
        return redirect('/listaProdotti');
    }





}
