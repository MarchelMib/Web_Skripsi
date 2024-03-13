<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user has the isAdmin flag
            if (Auth::user()->isAdmin) {
                // User is an admin, allow access
                return $next($request);
            }
        }

        // If user is not authenticated or not an admin, redirect or return an error response
        return redirect('/')->with('error', 'You do not have permission to access this page.');
    }
}
