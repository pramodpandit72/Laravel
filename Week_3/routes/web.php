<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\GroceryShop;
use App\Http\Controllers\University;
use App\Http\Controllers\APIController;
use App\Http\Controllers\FileController;

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [FileController::class, 'uploadFile']);

Route::get('/get-quotes',[APIController::class, 'fetchapi']);

Route::middleware('checkage')->group(function() {
 // Group middleware
    Route::get('/a', function() {
    return ("Hello from Route a");
});

Route::get('/b', function() {
    return ("Hello from Route b");
});

});

// Middleware
Route::get('/dashboard', function() {
    return ("Hello from Route middleware");
})->middleware("checkage");


Route::get('/get-students',[University::Class, 'index'])->middleware("checkage");

Route::get('/get-items',[GroceryShop::Class, 'getitems']);


Route::get('/send-email', [MailController::class,'sendemail']);



Route::view('/login', 'loginpage');
Route::post('/loginsubmit', [LoginController::class, 'login']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('masterfile');
});

Route::get('/lpu/signup/2026', function(){
    return view('signup');
})->name('sign');


Route::view('/registration', 'registration')->name('registration');
Route::post('/submit', [Registration::class,'register']);