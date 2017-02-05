<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session_start();
        if(!isset($_SESSION['usuario']))
        {
                return redirect('admin');
        }
        return $next($request);
    }

}
