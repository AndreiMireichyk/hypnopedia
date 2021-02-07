<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $url_locale = $request->segment(1);

        if (in_array($url_locale, config('app.available_locale'))) {

            App::setLocale($url_locale);

        } else {

            App::setLocale(config('app.locale'));

            return redirect()->route('home', ['locale' => App::getLocale()]);
        }

        return $next($request);
    }
}
