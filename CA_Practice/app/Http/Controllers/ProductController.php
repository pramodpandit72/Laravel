<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
{
    $products = [
        ['name' => 'Laptop', 'quantity' => 5, 'price' => 50000],
        ['name' => 'Mobile', 'quantity' => 10, 'price' => 20000],
        ['name' => 'Tablet', 'quantity' => 7, 'price' => 15000],
    ];

    return view('productsView', compact('products'));
}
}
