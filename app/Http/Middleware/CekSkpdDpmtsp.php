<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CekSkpdDpmtsp
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
        if(((Auth::user()->level_id == 1)||(Auth::user()->level_id == 3)||(Auth::user()->level_id == 5))&&((Auth::user()->skpd_id == 73075)||(Auth::user()->skpd_id == 73074))){
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
