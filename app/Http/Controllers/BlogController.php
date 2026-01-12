<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all();
        return view('front.blog', compact('blogs'));
    }

    public function blogIn($id, $slug)
    {
        $blog = Blog::findOrFail($id);

        $locale = app()->getLocale();

        $currentLocaleSlug = $blog->{'slug_' . $locale};


        if ($slug !== $currentLocaleSlug) {
            return redirect()->route('blogIn.page', [
                'id' => $blog->id,
                'slug' => $currentLocaleSlug
            ]);
        }

        return view('front.blogIn', compact('blog'));
    }
}
