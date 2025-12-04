<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsInController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/set-lang/{lang}', function ($lang) {

    session(['locale' => $lang]);
    App::setLocale($lang);
    return back();
})->name('set.lang');

Route::get('/', [IndexController::class, 'index'])->name('index.page');
Route::get('/about', [AboutController::class, 'about'])->name('company.page');
Route::get('/news', [NewsController::class, 'news'])->name('news.page');
Route::get('/news/{slug}', [NewsController::class, 'newsIn'])->name('newsIn.page');
