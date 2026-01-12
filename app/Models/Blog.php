<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable = ['img', 'title_uz','title_ru','title_en', 'text_uz','text_ru','text_en', 'slug_uz', 'slug_ru', 'slug_en'];
}
