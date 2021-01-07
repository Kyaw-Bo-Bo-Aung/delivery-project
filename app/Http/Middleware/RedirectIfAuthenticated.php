<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // return redirect(RouteServiceProvider::HOME);
             $roles = auth()->user()->getRoleNames();

            // Check user role
            switch ($roles[0]) {
                case 'admin':
                        return redirect()->route('orders');
                    break;
                case 'client':
                        return redirect()->route('main');
                    break;
                case 'delivery_man':
                        return redirect()->route('accountpage');
            }
        }

        return $next($request);
    }
}
