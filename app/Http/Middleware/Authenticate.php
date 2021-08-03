<?php

namespace App\Http\Middleware;

include("/psc/www/html/publications/lib/classes/publications/staffuser.php");

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
		//$session = \Publications\StaffUser::currentUser();

$session = ["username" => "mojojojo", "role" => "editor", "sitename" => "cfm", "display_name" => "Mojo", "project_id" => 1];

      if (!$session['username'] && !$session['role']) {
        return response('Unauthorized.', 401);
      }

      $request->identity = (object) $session;

      return $next($request);
    }
}
