<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormValidation;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SendEmail;


Route::get('/welcome/{name}', function ($name) {
    return view('welcome', ['name' => $name]);
});

Route::get('/dashboard', function () {
    return "Dashboard";
})->middleware('auth');


Route::get('/upload', [SendEmail::class, 'showForm']);
Route::post('/upload', [SendEmail::class, 'handleUpload']);



// Route::get('/', [FormValidation::class, 'showForm']);
Route::get('/show-form', [FormValidation::class, 'showForm']);
Route::post('/submit-form', [FormValidation::class, 'submitForm']);
Route::get('/data', [FormValidation::class, 'showData']);

Route::get('/products', [ProductController::class, 'showProducts']);