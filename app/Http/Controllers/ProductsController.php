<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::all();
        return view('products.index', ['products'=>$products]);
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.index');
    }

}
