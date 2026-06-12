<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            abort(401);
        }

       if (strtolower(auth()->user()->role) !== 'student') {
    abort(403, 'Unauthorized');
}

        return $next($request);
    }
}
