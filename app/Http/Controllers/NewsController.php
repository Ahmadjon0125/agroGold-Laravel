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

    public function newsIn($id, $slug)
    {
        $new = News::findOrFail($id);

        $locale = app()->getLocale();

        $currentLocaleSlug = $new->{'slug_' . $locale};


        if ($slug !== $currentLocaleSlug) {
            return redirect()->route('newsIn.page', [
                'id' => $new->id,
                'slug' => $currentLocaleSlug
            ]);
        }

        return view('front.newsIn', compact('new'));
    }
}
