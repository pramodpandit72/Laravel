<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('masterfile');
});


Route::view('/registration', 'registration')->name('registration');
Route::post('/submit', [Registration::class,'register']);