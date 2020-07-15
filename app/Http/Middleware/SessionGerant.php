<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Validation\Rules\Exists;

class SessionGerant
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
        if(!session()->get('gerant')){
            return redirect()->route('gerant.auth');
        }
        return $next($request);
    }
    public function terminate($request, $response)
    {
        // Store the session data...
    }
}
