<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\News;
use App\Models\Photos;
use App\Models\Slider;
use App\Models\Videos;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $company = About::first();
        $news = News::all();
        $photos = Photos::all();
        $videos = Videos::all();
        return view('front.index', compact('sliders', 'company', 'news','photos', 'videos'));
    }
}
