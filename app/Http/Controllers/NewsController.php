<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::all();
        return view('front.news', compact('news'));
    }

    public function newsIn($slug)
    {
        $locale = app()->getLocale();

        $column = "slug_{$locale}";

        $new = News::where($column, $slug)->firstOrFail();


        return view('front.newsIn', compact('new'));
    }
}
