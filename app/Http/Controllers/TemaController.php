<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use Session;
use App\Cart;



class TemaController extends Controller
{
//FRONT VIEW------------------------------------------
    public function home()
    {
        $products= Product::All()->where('discount', '>', 0);
        $Newproducts =Product::All();
        return view('front.home')->with('products', $products)->with('Newproducts', $Newproducts);
    }
    public function mail()
    {
        return view('front.mail');
    }
    public function about()
    {
        return view('front.about');
    }
    public function pagamenti()
    {
        return view('front.pagamenti');
    }


//----------------------------GESTIRE UTENTI----------------------------------------------
//registra utente
    public function registrati(Request $request)
    {
        //istruzioni per la validazione
        $this->validate($request, ['email' => 'email|required',
        'password' => 'required|min:6' ]);
        
        //istanza del Model Customer
        $Customer = new Customer();
        
        //catturo i dati di input nel form e md5 -cripto la password
        $Customer->email = $request->input('email');
        $Customer->password = md5($request->input('password'));
        
        //salva nella tabella Customer

        $Customer->save();
        Session::put('Customer', $Customer);
        Session::put('status', 'Il tuo account e stato creato!');
        //redirect a cart con messaggio da mostrare: status
        return redirect('/cart');
    }
    
  //login utente
    public function login()
    {
        return view('front.login');
    }

  
    public function accesso(Request $request)
    {
        $this->validate($request, ['email' => 'email|required',
                                'password' => 'required' ]);

        $Customer  = Customer::where('email', $request->input('email'))->first();

        if ($Customer) {
            $password=md5($request->input('password'));
            //echo $password."<br>";
            $passwordDB= ($Customer->password);
            //echo $passwordDB;
            if ($password == $passwordDB) {
                Session::put('Customer', $Customer);
                // echo 'passo da qui';

                return redirect('/cart')->with('status', 'Utente loggato correttamente');

            } else {
                return back()->with('status', 'Email o password non corretta');
            }
        } else {
            return back()->with('status', 'Non hai un account con questa email');
        }
    }


    //Logout Utente
   
    public function logout()
    {
        Session::forget('Customer');
        if (Session::has('Aggiorna')){
            Session::forget('Aggiorna');
        }

        return redirect('/');
    }

    //aggiorna utente
    public function completaDati(Request $request, $id)
    {
        $aggiorna = Customer::where('id', $id)->first();
        $aggiorna->nome = $request->input('nome');
        $aggiorna->cognome = $request->input('cognome');
        $aggiorna->indirizzo = $request->input('indirizzo');
        $aggiorna->citta = $request->input('citta');
        $aggiorna->nazione = $request->input('nazione');
        
      
        $aggiorna->save();
        //cosi aggiorno la sessione Customer con i dati modificati
        Session::put('Customer', $aggiorna);
              //cosi creo la sessione Aggiorna  con i dati inseriti
        Session::put('Aggiorna', $aggiorna);
        return redirect('/cart')->with('status', 'hai aggiornato i dati');
    }

    //------------------------------------------PRODOTTI------------------------------------
    public function shop()
    {
       // $products= Product::All();
        $products= Product::paginate(8);
        return view('front.shop')->with('products', $products);
    }

    //single product
    public function singolo($id)
    {
    $product = Product::find($id);

    return view('front.singolo')->with('product', $product);
    }

    //----------------------------------------------CART-----------------------------------------

    public function cart()
        {
            if (!Session::has('cart')) {
                return view('front.cart');
            }
    
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
    
            return view('front.cart', ['products' => $cart->items]);
            // return view('front.cart');
        }
    public function addCart($id)
        {
            $product = Product::find($id);
            
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart->add($product, $id);
            Session::put('cart', $cart);
    
            //dd(Session::get('cart'));
            return back();
        }
    
    public function update_qty(Request $request, $id)
        {
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            
            $cart->updateQty($id, $request->quantity);
            
            Session::put('cart', $cart);
    
            // dd(Session::get('cart'));
            return back();
        }
    
    public function remove($id)
        {
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart->removeItem($id);
           
            if (count($cart->items) > 0) {
                Session::put('cart', $cart);
            } else {
                Session::forget('cart');
            }
    
            //dd(Session::get('cart'));
            return redirect('/cart');
        }
    
    public function removeItem($id)
            {
                $this->totalQty -= $this->items[$id]['qty'];
                $this->totalPrice -= $this->items[$id]['product_price'] * $this->items[$id]['qty'];
                unset($this->items[$id]);
            }
    
    public function ProcediOrdine()
            {
            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $order= new Order;
            $order->Customer_id= (Session('Customer')->id);
            $order->nome= (Session('Customer')->email);
            $order->indirizzo= (Session('Aggiorna')->indirizzo);
            $order->nome= (Session('Customer')->email);
            $order->citta= (Session('Aggiorna')->citta);
            $order->cart = serialize($cart);

            $order->prezzo= (Session('cart')->totalPrice);
            $order->stato = 1;
            Session::put('Order', $order);
            $order->save();
            
            return redirect('/pagamenti')->with('status', 'ordine aggiornato');
            }
      
}
