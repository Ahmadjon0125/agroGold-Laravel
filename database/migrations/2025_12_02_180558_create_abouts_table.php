<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('img1');
            $table->string('img2');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->longText('text_uz');
            $table->longText('text_ru');
            $table->longText('text_en');
            $table->longText('text2_uz');
            $table->longText('text2_ru');
            $table->longText('text2_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
