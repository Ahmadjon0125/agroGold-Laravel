<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/set-lang/{lang}', function ($lang) {

    session(['locale' => $lang]);
    App::setLocale($lang);
    return back();
})->name('set.lang');

Route::get('/', [IndexController::class, 'index'])->name('index.page');
Route::get('/about', [AboutController::class, 'about'])->name('company.page');
