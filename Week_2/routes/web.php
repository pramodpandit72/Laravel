<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// // Router returning a simple string Hello world
// Route::get("/hello", function(){
//     return "<h1 style='color:red; text-decoration:underline'>Hello World</h1>";
// });

// // Route::get("/lpu/course/btech", function(){
// //     return "I am enrolled";
// // });

// // Pass multiple parameters
// Route::get('/lpu/{roll}/{name?}', function ($roll, $name = "Guest") {
//     return "My name is: " . ucfirst($name) . ". Roll no is: " . $roll;
// });

// // Corrected route
// Route::get('uni/{name?}/{age?}', function($name="Guest", $age="not mentioned"){
//     return response("Welcome Your Name is ".ucfirst($name)."<br>Your age is ".$age);
// });

// // Route to add two numbers
// Route::get('/add/{num1}/{num2}', function($num1,$num2){
//     return response("The addition of ".$num1." and ".$num2." is ".($num1 + $num2));
// });

// // take 1 num in route and print table
// Route::get('/table/{num}', function($num){
//     $result = "";

//     for($i = 1; $i <= 10; $i++) {
//         $result .= $num . " * " . $i . " = " . ($num * $i) . "<br>";
//     }
//     return $result;
// });


// // Make route /lpu/courses that dispaly list of courses
// Route::get("/lpu/courses", function(){
//     $course=[Btech. BCE, Mtech];
//     foreach($course as $course){
//         $result.="<li> $course </li>";
//     }
//     return $result;
// });

// Use of Response Function
//Create a Route that will return a JSON Response

// Route::get("/response", function() {
//     return response("Route Returning Some Response String");
// });

// Route::get('/json-response', function(){
//     $data=["name"=>"aman","age"=>23,"email"=>"abc@gmail.com"];
//     return response()-> json($data);
// });

//Create a route that will start downloading a pdf file
// Route::get("/download-file", function() {
//     return response()->download(public_path("myfile/Pramod.pdf"));
// });

// Route Returning a URL

// Route::get("/opengpt", function() {
//     return redirect()->away("https://chatgpt.com/");
// });

// Route Returning a View i.e 
Route::get("/about-us", function() {
    return response()->view('aboutus');
});

// // Route Redirection
// Route::get("/admin", function() {
//     return redirect('/student');
// });
// Route::get("/student", function() {
//     return "Welcome to Student dashboard";
// });

// Route::get('/lpu/admin', function() {
//     return redirect('/lpu/student');
// });

// Route::get('/lpu/student', function() {
//     // return "Welcome to student Dashboard. You are Authorised for this Route";
//     return view('studentlogin');
//     // return redirect('https://ums.lpu.in/lpuums/');
// });

//attaching headers to the route
//headers are used to send additional information with the response
//for example we can send the about the author of the page, description of the page, keywords etc
//seen in Nework tab of the browser

// Route::get('/header', function() {
//     return response("This is a page with custom headers")
//     ->header('Developer','LPU')
//     ->header('Description', 'This site is developed to make connection between student and university easier')
//     ->header('Developed_In_Year', "2024");
// });


// Route::get('/', function() {
//     return response()-> view("Welcome")
//     ->header('Developer','LPU')
//     ->header('Description', 'This site is developed to make connection between student and university easier')
//     ->header('Developed_In_Year', "2024");
// });


// Route::get('/headers', function() {
//     return response("This route is made for navigating to header info. Info is in Newtwork part in console")
//     ->header('Developed_BY','XYZ')
//     ->header('Developed_in_year', 2026);
// });


//Passing Data to the views
//Passing data to the views with associative array
// Route::get('/admin', function() {

    // Passing data to the views with associative array
    // return view('adminpage', ['name' => 'LPU Student', "designation" => "Programmer", "age" => 23]);

    // pass with with-chaining method
    // return view("admingpage")
    // ->with('name','LPU')
    // ->with('designation','Programmer')
    // ->with('age',23);

    // Passing using compact method
    // $name="LPU";
    // $designation="Programmer";
    // $age=30;
    // return view('adminpage', compact('name', 'age', 'designation'));

    // Passing withVariable()
//     {
//         $name = "LPU";
//         $designation = "Programmer";
//         $age = 30;

//         return view("adminpage")
//         ->withname($name)
//         ->withDesignation($designation)
//         ->withAge($age);
//     }

// });




Route::get('/result', function () {

    $name = "Rahul Sharma";
    $roll = 101;

    $math = 85;
    $science = 78;
    $english = 90;

    $total = $math + $science + $english;
    $percentage = $total / 3;

    return view('result', compact(
        'name',
        'roll',
        'math',
        'science',
        'english',
        'total',
        'percentage'
    ));
});