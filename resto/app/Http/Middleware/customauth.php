<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class customauth
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
        $path=$request->path();
        if(($path=='login' || $path=='register') && Session::get('user'))
        {
            return redirect('/list');
        }elseif(($path!='login') && !Session::get('user') && $path!='register' )

        {
            return redirect('login');

        }
        return $next($request);
    }
}
