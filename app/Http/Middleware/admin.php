<?php

namespace App\Http\Middleware;

use Closure;
use App\user;
use Auth;
class admin
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

      $user=user::find(Auth::id());
        if ($user->roles=='admin') {
          return $next($request);
        }
        return back();
    }
}
