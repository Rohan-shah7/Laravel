<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Rohanmiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Redirect /student/rohan to /student/ranjit
        if ($request->is('student/rohan')) {
            return redirect('student/ranjit');
        }

        return $next($request);
    }
}
