<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;
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
Route::get('/news/{id}/{slug}', [NewsController::class, 'newsIn'])->name('newsIn.page');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog.page');
Route::get('/blog/{id}/{slug}', [BlogController::class, 'blogIn'])->name('blogIn.page');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact.page');
Route::get('/media', [MediaController::class, 'media'])->name('media.page');
Route::get('/category', [CategoryController::class, 'category'])->name('category.page');
Route::get('/category/{id}/{slug}', [CategoryController::class, 'catalog'])->name('catalog.page');

Route::get('/category/{categoryId}/{categorySlug}/{catalogId}/{catalogSlug}', [CatalogController::class, 'show']) 
    ->name('catalog.show') 
    ->where(['categoryId' => '[0-9]+', 'catalogId' => '[0-9]+']);
