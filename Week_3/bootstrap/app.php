<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CheckAge;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // $middleware->append(AgeCheck::class);
        $middleware->alias(["checkage"=>App\Http\Middleware\CheckAge::class]);
    })
    ->withMiddleware(function (Middleware $middleware): void {
    //    $middleware->append(CheckAge::class); // Appending to make it global mideleware
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();


    // in booostrap app.php we have to register the middleware  and here 