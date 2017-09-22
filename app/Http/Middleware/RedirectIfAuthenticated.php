<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        dd(Auth::user()->email);
        if (Auth::guard($guard)->check()){
            // $user = User::find(Auth::id());
            //     dd($user);
                    return $next($request);
        }
        // else
        //     return redirect('/login');

    }
}
