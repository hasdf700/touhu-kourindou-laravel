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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->restrictOnDelete();
            $table->string('name', 50);
            $table->string('title', 50)->nullable();
            $table->text('description')->nullable();
            $table->string('ability')->nullable();
            $table->string('theme_music', 100)->nullable();
            $table->string('spell_card', 100)->nullable();
            $table->string('color', 7)->default('#FFFFFF');
            $table->string('accent_color', 7)->default('#FFFFFF');
            $table->string('image_path')->nullable();
            $table->string('artist');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
