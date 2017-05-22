<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if(session('name') == null){
            return redirect('/admin/login')->with('errmsg','您好,请您先登录！');
        }
        return $next($request);
    }
}
