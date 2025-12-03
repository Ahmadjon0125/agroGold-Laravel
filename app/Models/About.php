<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en', 'text2_uz', 'text2_ru', 'text2_en', 'img1', 'img2' ];
}
