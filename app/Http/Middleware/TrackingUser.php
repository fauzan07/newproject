<?php

namespace App\Http\Middleware;

use Closure;

class TrackingUser
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

        $tracking =new Tracking();
        $track_user_id=Auth::User()->id;
        
        return $next($request);
    }
}
