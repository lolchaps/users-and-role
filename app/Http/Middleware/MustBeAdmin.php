<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check() && Auth::user()->role->name == 'admin') {
            return $next($request);
        }

        abort(403);
        /* Or Session Message */
        /*
        \Session::flash('flash_message', 'Only Admin can access this route..');
        return back();
        */
    }
}
