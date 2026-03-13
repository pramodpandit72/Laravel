<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Router returning a simple string Hello world
Route::get("/hello", function(){
    return "<h1 style='color:red; text-decoration:underline'>Hello World</h1>";
});

Route::get("/lpu/course/btech", function(){
    return "I am enrolled";
});

// Pass multiple parameters
Route::get('/lpu/{roll}/{name?}', function ($roll, $name = "Guest") {
    return "My name is: " . ucfirst($name) . ". Roll no is: " . $roll;
});

// Corrected route
Route::get('uni/{name?}/{age?}', function($name="Guest", $age="not mentioned"){
    return response("Welcome Your Name is ".ucfirst($name)."<br>Your age is ".$age);
});

// Route to add two numbers
Route::get('/add/{num1}/{num2}', function($num1,$num2){
    return response("The addition of ".$num1." and ".$num2." is ".($num1 + $num2));
});

// take 1 num in route and print table
Route::get('/table/{num}', function($num){
    $result = "";

    for($i = 1; $i <= 10; $i++) {
        $result .= $num . " * " . $i . " = " . ($num * $i) . "<br>";
    }
    return $result;
});


// Make route /lpu/courses that dispaly list of courses