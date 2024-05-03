<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        app()->setLocale(session('localization', config('app.locale')));

        // if (session()->has('locale')) {
        //     $language = session('locale');
        //     app()->setLocale($language);
        // }
        return $next($request);
    }
}
