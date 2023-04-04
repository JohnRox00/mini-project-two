<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
{
    if ($request->user() && $request->user()->user_type === 1) {
        return $next($request);
    } elseif ($request->user() && $request->user()->user_type === 0) {
        return redirect('/home')->with('warning', 'You do not have admin access.');
    }

    return redirect('/home');
}

}
