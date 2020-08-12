<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class login_cek
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
      if(Session::get('login_status1')!=true){
        return redirect('login2');
      }
        return $next($request);
    }
}
