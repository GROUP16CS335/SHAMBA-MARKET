<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class MainViewController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('frontend.index')->with('products', $products);
    }

}
