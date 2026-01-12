<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $fillable = ['poster', 'link', 'title_uz','title_ru','title_en', 'text_uz','text_ru','text_en'];
}
