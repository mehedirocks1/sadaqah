<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $roleName)
    {
        $user = Auth::user();

        if ($user && $user->hasRole($roleName)) {
            return $next($request);
        }

        return redirect('/'); // Redirect or handle unauthorized access
    }
}
