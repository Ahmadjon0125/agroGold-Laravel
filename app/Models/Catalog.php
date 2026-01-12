<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = [
        'img',
        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
        'slug_uz',
        'slug_ru',
        'slug_en',
        'specs',
        'usage_ru',
        'usage_uz',
        'usage_en',
        'advantages_ru',
        'advantages_uz',
        'advantages_en',
        'category_id'
    ];

    protected $casts = [
        'specs' => 'array',
    ];

    public function category()
    {
        // Catalog bitta Categoryga tegishli
        return $this->belongsTo(Category::class);
    }

    // public function products()
    // {
    //     // Bir Catalogda ko'p Tovar bo'ladi
    //     return $this->hasMany(Product::class);
    // }
}
