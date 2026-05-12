<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->input('age');

        if ($age === null || $age === '') {
            return response('Age is required', 400);
        }

        if ((int) $age < 18) {
            return response('You are not eligible', 403);
        }

        return $next($request);
    }
}
