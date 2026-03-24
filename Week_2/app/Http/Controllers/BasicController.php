<?php

namespace App\Http\Controllers; // path of controller

use Illuminate\Http\Request; // Request class to get some request from the server

class BasicController extends Controller // Inheritance Our Class is extending the Controller means we can use the functions of Controller Class
{
    // Make  a Function to get  string response on some route
    public function greet(){
        // return "Hello From Controller";
        $products=[
            ["id"=>1, "name"=>"chair", "price"=>2000],
            ["id"=>2, "name"=>"table", "price"=>3000],
            ["id"=>3, "name"=>"desk", "price"=>4000]
        ];
        return response()->json($products);
    }

    // Make a function to return some UI on some route
    // Returning view from controller
    public function signup(){
        return view('signup');
    } 
}
