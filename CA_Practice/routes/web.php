<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormValidation;
use App\Http\Controllers\ProductController;

// Route::get('/', [FormValidation::class, 'showForm']);
Route::get('/show-form', [FormValidation::class, 'showForm']);
Route::post('/submit-form', [FormValidation::class, 'submitForm']);
Route::get('/data', [FormValidation::class, 'showData']);

Route::get('/products', [ProductController::class, 'showProducts']);