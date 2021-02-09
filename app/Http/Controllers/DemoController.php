<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class DemoController extends Controller
{
    public function getIndex(){
        $products = Product::al();
        return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect('/');

    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('frontend.cart', ['products'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontend.cart', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
    }
}
