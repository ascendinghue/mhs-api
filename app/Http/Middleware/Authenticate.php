<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
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
      $session = ["username" => false, "role" => false, "sitename" => "", "display_name" => ""];

      if (!$session['username'] && !$session['role']) {
        return response('Unauthorized.', 401);
      }

      $request->identity = (object) $session;

      return $next($request);
    }
}
