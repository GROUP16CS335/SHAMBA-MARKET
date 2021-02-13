<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use App\Models\Product;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontend.checkout', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $orderDetail = new OrderDetails;
        $orderDetail->user_id=auth()->user()->id;
        $orderDetail->firstname = $request -> input('fname');
        $orderDetail->lastname = $request -> input('lname');
        $orderDetail->email = $request -> input('email');
        $orderDetail->phone = $request -> input('phone');
        $orderDetail->address1 = $request -> input('address1');
        $orderDetail->address2 = $request -> input('address2');
        $orderDetail->country = $request -> input('country');
        $orderDetail->region = $request -> input('region');
        $orderDetail->district = $request -> input('district');
        $orderDetail->pay_method = $request -> input('paymentMethod');
        $orderDetail->save();


        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        if (Session::has('cart')) {
            foreach ($cart->items as $product) {
                $order = new Order;
                $order->user_id = auth()->user()->id;
                $order.implode($product)->item = $request-> $product['item']->pname;
                $order->item = $request-> $product['item']->price;
                $order->save();
            }
        }


        return redirect('/')->with('status', 'Your order has been received, you will be contacted shortly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
