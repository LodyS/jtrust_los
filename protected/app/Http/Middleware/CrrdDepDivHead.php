<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CrrdDepDivHead
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
        if(Auth::user()->jabatan_user->nama_jabatan !== 'Credit Risk Reviewer Deputy Division Head'):
            abort(403);
        endif;

        return $next($request);
    }
}
