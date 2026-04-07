<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Controller Routing
Route::get('/user', [UserController::class, 'index']);













Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return "Hello World";
});

Route::get('/about', function() {
    return view('about', ["name" => "Pramod ", "age" => "25"]);
});

// Compact
// Route::get("/new", function() {
//     $name="Pramod";
//     return view("newview", compact("name"));
// });

// With Method
// Route::get("/new", function() {
//     //$name="Pramod;
//     //$address="Bihar";
//     return view("newview")->with("name", "Pramod")
//                           ->with("Address", "Bihar");
// });

// withName()
// Route::get("/new", function() {
//     $name="Pramod";
//     $address="Bihar";
//     $pin="1234";
//     return view("newview")->withName($name)
//                           ->withAddress($address)
//                           ->withPin($pin);
// });

// Passing the data as an array
// Route::get("/arraypass", function() {
//     return view('about', ["data" => [10,20,30,40,50]]);
// });


// Route::get('/teas', function() {
//     $teas= [
//         ["name" => "Masala chai", "price" => "10", "id" => 1],
//         ["name" => "Ginger chai", "price" => "20", "id" => 2],
//         ["name" => "Assam chai", "price" => "30", "id" => 3]
//     ];
//     return view('teas.index', ["teas" => $teas]);
// });

// Route::get('/teas/{id}', function($id) {
//     $teas= [
//         ["name" => "Masala chai", "price" => "10", "id" => 1],
//         ["name" => "Ginger chai", "price" => "20", "id" => 2],
//         ["name" => "Assam chai", "price" => "30", "id" => 3]
//     ];
//     return view('teas.teadetail', ["tea" => $teas[$id - 1]]);
// });
