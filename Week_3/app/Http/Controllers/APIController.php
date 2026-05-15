<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; //because we have used class and get function

class APIController extends Controller
{
    public function fetchapi(){
        $response = Http::get("https://dummyjson.com/quotes");
       
        $quotes = $response->json('quotes');

        return view('quotespage', compact('quotes'));
    }
}
