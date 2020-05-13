<?php

namespace App\Http\Middleware;

use Closure;

class Agechecker
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
        echo "hey this is the age middleware";
        if($request->input('age') > 20){
            echo "more then 20";
        }
        else{
            echo "less then 20";
        }
        return $next($request);
    }
}
