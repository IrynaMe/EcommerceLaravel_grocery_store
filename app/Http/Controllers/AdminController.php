<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//nel caso si utilizzi il metodo query builder
use Illuminate\Support\Facades\DB;
//nel caso si utilizzi per le query i models
use App\Models\Customer;
use App\Models\Product;
use App\Models\Amministratore;
use App\Models\Order;
//uso dele sessioni
use Session;

class AdminController extends Controller
{
    public function home()
    {
        return view('amministrazione.home');
    }

    // -----------------------------GESTIRE UTENTI---------------------------------------
    public function listaUtenti()
    {
        if (Session::has('amministratore')){
            $customers = Customer::paginate(4);
            return view('amministrazione.listaUtenti')->with('customers', $customers);
        } else {
            return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
        }
        
    }

    public function creaUtenti()
    { 
        if (Session::has('amministratore')){
            return view('amministrazione.creaUtenti');
        } else {
            return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
        }
        
    }

    public function editCustomer($id)
    {
        if (Session::has('amministratore')){
            $customer = Customer::find($id);
            return view('amministrazione.editCustomer')->with('customer', $customer);
        } else {
            return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
        }
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
    // -----------------------------GESTIRE ORDINI--------------------------------------
    public function ordini()
    {
        return view('amministrazione.ordini');
    }

    public function creaProdotti()
    {
        if (Session::has('amministratore')){
            return view('amministrazione.creaProdotti');
        } else {
            return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
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
        if (Session::has('amministratore')){
            $products = Product::paginate(10);
            return view('amministrazione.listaProdotti')->with('products', $products );
        } else {
            return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
        }
       
    }
  
    public function editProduct($id)
    {
        if (Session::has('amministratore')){
            $product = Product::find($id);
            return view('amministrazione.editProduct')->with('product', $product);
        } else {
            return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
        }
        
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
// -----------------------------GESTIRE ordini-------------------------
    public function listaOrdini()
    {  if (Session::has('amministratore')){
        $orders = Order::paginate(3);
        //trasformo info da seriale json ad un array, 
        //su cui posso applicare foreach
        //dove $key=unserialize($order->cart)
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('amministrazione.ordini')->with('orders', $orders);
    } else {
        return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
    }
        
    }
       
    
    
    // -----------------------------GESTIRE ADMIN-------------------------
    public function dashboard()
    {   
        if (Session::has('amministratore')){
            return view('amministrazione.dashboard');
        } else {
            return redirect('/admin')->with('status', 'Devi fare login come Admin!');  
        }
        
    }
    
    public function loginAmmre(Request $request)
    {
        $this->validate($request, ['email' => 'email|required',
                                   'password' => 'required' ]);

        $Amministratore  = Amministratore::where('email', $request->input('email'))->first();
        
        if ($Amministratore) {
            $password=md5($request->input('password'));
            //echo $password."<br>";
            $passwordDB= ($Amministratore->password);
            //echo $passwordDB;
            if ($password == $passwordDB) {
                Session::put('amministratore', $Amministratore);
                // echo 'passo da qui';
                return redirect('/dashboard')->with('status', 'Welcome, Admin!');            
            } else {
                return back()->with('status', 'Email o password non corretta');
            }
        } else {
            return back()->with('status', 'Non hai un account con questa email');
        }
    }

    //logout Admin
    public function logoutAdmin()
        {
            Session::forget('amministratore');
            return redirect('/');
        }

    

}
