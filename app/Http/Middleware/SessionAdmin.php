<?php

namespace App\Http\Middleware;

use Closure;

class SessionAdmin
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
        if(!session()->get('admin')){
            return redirect()->route('admin_auth');
        }
        return $next($request);
    }
    public function terminate($request, $response)
    {
    // Store the session data...
    }
}
