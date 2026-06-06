<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{

public function showProducts()
{
    $products = Product::all();
    return view('products', compact('products'));
}

    public function showProducts2()
    {
        $products = Product::all();

        return view('products')->with('products', $products);
    }
}