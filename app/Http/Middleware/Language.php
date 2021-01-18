<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Session;
use Config;

class Language
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
        if (Session::has('locale')) {
            $locale = Session::get('locale', Config::get('app.locale'));
        } else {
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

            if ($locale != 'it' && $locale != 'en') {
                $locale = 'it';
            }
        }
        $locale = ($locale == 'it') ? 'it_IT' : $locale;
        setlocale(LC_TIME, $locale);
        App::setLocale($locale);
        \Carbon\Carbon::setLocale($locale);

        return $next($request);
    }
}