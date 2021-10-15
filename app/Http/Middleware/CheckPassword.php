<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request -> api_password == null){
            return response()->json(['message'=>'you must send password..']);
        }
        if($request -> api_password !== env('API_PASSWORD' ,'123456789')){
            return response()->json(['message'=>'Unauthenticated..PIZ try after time!']);
        }
        return $next($request);
    }
}
