<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ServiceCenter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role=='service_center' && auth()->user()->country == 'bangladesh')
        {
            notify()->success('Login success!');
            return $next($request);

        }
        return redirect()->route('login');
        
    }
}
