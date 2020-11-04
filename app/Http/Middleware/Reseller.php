<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Reseller
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @param  string|null  $guard
  * @return mixed
  */
  public function handle($request, Closure $next)
  {
    if (Auth::check() && Auth::user()->role == 2) {
      return $next($request);
    }
    return abort(403, 'Unauthorized action.');
  }
}
