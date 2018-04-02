<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class RedirectIfNotPelamar
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
      if(Auth::user()->level != 'user'){
        Session::flash('redirectMessage','Hanya Untuk Pelamar');
        return redirect()->back();
      }
        return $next($request);
    }
}
