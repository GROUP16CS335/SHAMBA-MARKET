<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->where('user_id', auth()->user()->id);
        return view('vendor.products.index')->with('products', $products);
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
        $this->validate($request,[
            'pname'=>'required',
            'pcategory'=>'required',
            'desc'=>'required',
            'price'=>'required',
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image'=>'mimes:jpg,png,bmp'
            ]);

            $pimage = request()->file('image');
            $imageName = time().rand(0,9).'.'.$pimage->getClientOriginalExtension();
            //$destination = storage_path('public/productImages');
            $pimage->storeAs('public/productImages', $imageName);
        }

        $product = new Product;
        $product->vid=auth()->user()->id;
        $product->pname = $request -> input('pname');
        $product->pcat = $request -> input('pcategory');
        $product->desc = $request -> input('desc');
        $product->price = $request -> input('price');
        $product->image = $imageName;

        $product->save();

        return redirect('/products')->with('message', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = User::find($id);
        return view('vendor.products.index')->with('products', $products);
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
