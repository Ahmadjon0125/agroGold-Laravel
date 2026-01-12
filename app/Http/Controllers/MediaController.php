<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use App\Models\Videos;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function media()
    {
        $photos = Photos::all();
        $videos = Videos::all();
        return view('front.media', compact('photos','videos'));
    }
}
