<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return "Hello World";
});

Route::get('/about', function() {
    return view('about', ["name" => "Pramod "]);
});

Route::get('/teas', function() {
    $teas= [
        ["name" => "Masala chai", "price" => "10", "id" => 1],
        ["name" => "Ginger chai", "price" => "20", "id" => 2],
        ["name" => "Assam chai", "price" => "30", "id" => 3]
    ];
    return view('teas.index', ["teas" => $teas]);
});
