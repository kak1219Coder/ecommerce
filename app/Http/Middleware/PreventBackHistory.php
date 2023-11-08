<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $reponse =  $next($request);
        return $reponse->header('Cache-Control','nocache,no-store,max-age=0;must-revelidate')
                       ->header('Pragma','no-cache')
                       ->header('Expires','Sun, 02 jan 1990 00:00:00 GMT');
    }
}
