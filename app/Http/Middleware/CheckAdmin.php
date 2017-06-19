<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        $cookies = $request->cookie();
        $values = $cookies["values"];
        if(!$values){
            return redirect()->route('log');
        }
        $strs = explode(",",$values);
        if((time()-$strs[0])>3*60*60){
            return redirect()->route('log');
        }
        $re = resolve('Getsignature');
        $value = $re->creat($strs[1],$strs[0]);
        if($strs[2]!=$value){
            return redirect()->route('log');
        }
        return $next($request);
    }
}
