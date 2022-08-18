<?php

namespace App\Http\Middleware;

use Closure;
use Hamcrest\Core\Set;
use App\Models\Setting;
use Illuminate\Http\Request;

class enCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $en = Setting::where('name', 'english')->first('value');
        if ($en->value == 1) {
            return $next($request);
        }
        return redirect('/');
    }
}
