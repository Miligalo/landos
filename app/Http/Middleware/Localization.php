<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    public function handle(Request $request, Closure $next, ...$guards){

        if($locale = $request->route('locale')){
            App::setLocale($locale);
        }
        return $next($request);
    }
}
