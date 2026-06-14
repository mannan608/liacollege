<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (auth()->check()) {

            return match (auth()->user()->role) {
                'admin' => redirect()->route('admin.dashboard'),
                'student' => redirect()->route('student.dashboard'),
                default => redirect('/'),
            };
        }

        return $next($request);
    }
}