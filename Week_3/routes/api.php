<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function() {
    return ["name"=>"amit","age"=>23,"email"=>"amit@gmail.com"];
});

// api are develpoed in routes->api.php
// api are accessed via localhost/api/test
// api are tested in thunderclient or postman
// Status code 200 means API is working fine