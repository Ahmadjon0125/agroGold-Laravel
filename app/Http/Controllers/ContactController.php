<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Map;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
 
    public function contact()
    {
        $map = Map::first();
        return view('front.contact', compact('map'));
    }
}