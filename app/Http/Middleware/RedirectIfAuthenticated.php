<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
            //return redirect('/home');
            if (Auth::user()->type == 'SuperUser') {
                return redirect('/superuser/dashboard');
            } elseif (Auth::user()->type == 'HR') {
                return redirect('/hr/dashboard');
            } elseif (Auth::user()->type == 'Bidder') {
                return redirect('/bidder/dashboard');
            } elseif (Auth::user()->type == 'TL') {
                return redirect('/tl/dashboard');
            } elseif (Auth::user()->type == 'Developer') {
                return redirect('/developer/dashboard');
            } elseif (Auth::user()->type == 'Fresher') {
                return redirect('/fresher/dashboard');
            } elseif (Auth::user()->type == 'Tester') {
                return redirect('/tester/dashboard');
            } elseif (Auth::user()->type == 'IT') {
                return redirect('/it/dashboard');
            }elseif(Auth::user()->type == "unapproved" || Auth::user()->type == NULL){
                return redirect('/approval-pending');
            }
        }

        return $next($request);
    }

}
