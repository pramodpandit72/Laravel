<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Importing View Class from the package

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View::share('University','LPU');
        //declaring global variables. It can be used in all blade files
        View::share(
            ['uni_name'=>'LPU',
            'link'=>'https://chatgpt.com/',
            'GST'=>8]
        );
    }
}
