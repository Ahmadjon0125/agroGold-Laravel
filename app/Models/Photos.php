<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
   protected $fillable = ['photo', 'title_uz','title_ru','title_en', 'text_uz','text_ru','text_en'];
}
