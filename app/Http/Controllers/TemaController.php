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
    

    public function login()
    {
        return view('front.login');
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
    
}
