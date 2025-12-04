<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $company = About::first();
        return view('front.index', compact('sliders', 'company'));
    }
}
