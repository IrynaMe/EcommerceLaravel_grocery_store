<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use Session;
use App\Cart;



class TemaController extends Controller
{
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

    //cart

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

    public function pagamenti()
    {
        return view('front.pagamenti');
    }
/*     public function shop()
    {
        return view('front.shop');
    } */

    public function shop()
    {
       // $products= Product::All();
        $products= Product::paginate(8);
        return view('front.shop')->with('products', $products);
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
            echo $password."<br>";
            $passwordDB= ($Customer->password);
            echo $passwordDB;
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


    

    //single product
    public function singolo($id)
    {
    $product = Product::find($id);

    return view('front.singolo')->with('product', $product);
    }
    
}
