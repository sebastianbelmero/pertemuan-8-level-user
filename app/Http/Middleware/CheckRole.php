<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if($request -> user()->level == $role) {
            return $next($request);
        }else{
            if($request -> user()->level == 'user') {
                return redirect('halaman-user');
            }else if($request -> user()->level == 'admin') {
                return redirect('halaman-admin');
            }else{
                return redirect('/');
            }
        }
    }
}
