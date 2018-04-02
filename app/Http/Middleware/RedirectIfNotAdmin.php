<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
class RedirectIfNotAdmin
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

      if(Auth::user()->level != 'admin'){
        Session::flash('redirectMessage','Anda Bukan Admin');
        return redirect()->back();
      }
        return $next($request);
    }
}
