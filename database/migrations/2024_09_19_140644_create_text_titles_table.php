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
        Schema::create('text_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('vest_id')->constrained('vestibulares')->onDelete('cascade');
            $table->foreignId('theme_id')->constrained('text_themes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_titles');
    }
};
