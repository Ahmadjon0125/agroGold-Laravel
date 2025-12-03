<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
       public function about() {
        $company = About::first();
    return view('front.company', compact('company' ));
   }
}
