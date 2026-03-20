<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // Returning a string from controller 
    public function index() {
        return "Hello from Controller";
    }

    public function show() {
        return view('lpupage');
    }
}
