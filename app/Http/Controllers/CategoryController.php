<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function category()
    {
        $categorys = Category::all();
        return view('front.category', compact('categorys'));
    }

     public function catalog($id, $slug)
    {
        $catalog = Catalog::findOrFail($id);

        $locale = app()->getLocale();

        $currentLocaleSlug = $catalog->{'slug_' . $locale};


        if ($slug !== $currentLocaleSlug) {
            return redirect()->route('catalog.page', [
                'id' => $catalog->id,
                'slug' => $currentLocaleSlug
            ]);
        }

        return view('front.catalog', compact('catalog'));
    }


}
