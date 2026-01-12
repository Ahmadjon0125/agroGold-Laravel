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
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('img');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->longText('text_uz');
            $table->longText('text_ru');
            $table->longText('text_en');
            $table->string('slug_uz');
            $table->string('slug_ru');
            $table->string('slug_en');
            $table->json('specs')->nullable();
            $table->longText('usage_ru');
            $table->longText('usage_uz');
            $table->longText('usage_en');
            $table->longText('advantages_ru');
            $table->longText('advantages_uz');
            $table->longText('advantages_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogs');
    }
};
