<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Session'da 'locale' mavjudligini tekshirish.
        // Agar mavjud bo'lsa, uni yoki 'uz' (default) tilini oladi.
        $locale = session('locale', config('app.locale')); 
        
        // 2. Ilovaga tilni o'rnatish
        App::setLocale($locale);
        
        return $next($request);
    }
}
