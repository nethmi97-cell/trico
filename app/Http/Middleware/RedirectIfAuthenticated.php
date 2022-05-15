<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null) {

        if (Auth::guard($guard)->check()) {
            $user = Auth::user();

            if ($user->hasRole('superadministrator')) {
                return redirect()->route('superadmin.index');
            } else if ($user->hasRole('administrator')) {
                return redirect()->route('admin.index');
            } else{
                return redirect()->route('client.index');
            }
        }
        return $next($request);
    }
}
