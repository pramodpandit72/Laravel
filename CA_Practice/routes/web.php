<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormValidation;

// Route::get('/', [FormValidation::class, 'showForm']);
Route::get('/show-form', [FormValidation::class, 'showForm']);
Route::post('/submit-form', [FormValidation::class, 'submitForm']);
