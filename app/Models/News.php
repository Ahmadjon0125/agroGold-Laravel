<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
        protected $fillable = ['img', 'title_uz','title_ru','title_en', 'text_uz','text_ru','text_en', 'slug_uz', 'slug_ru', 'slug_en', 'newsDate'];

    //     protected function slug(): Attribute
    // {
    //     return Attribute::set(function ($value, $attributes) {
    //         return $value ?: Str::slug($attributes['title'] ?? '');
    //     });
    // }

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
