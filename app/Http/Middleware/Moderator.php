<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Moderator extends Middleware
{

    public function handle(Request $request, \Closure $next, ...$guards)
    {
        if(false){
            return $next($request);
        } else {
            dd(111);
     }

    }
}
