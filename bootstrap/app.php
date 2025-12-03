<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        
        // E'tibor bering, web middleware guruhiga qo'shish kerak
        $middleware->web(append: [
            // Boshqa web middleware'lar bor, siz o'zingiznikini eng oxiriga qo'shishingiz mumkin
            \App\Http\Middleware\SetLanguage::class, // <-- Sizning Middleware'ingizni qo'shing
        ]);

        // Yoki, agar siz o'zingizning Middleware nomingizni ishlatgan bo'lsangiz:
        // $middleware->web(append: [
        //     \App\Http\Middleware\SetLocale::class, // Agar nomi SetLocale bo'lsa
        // ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
