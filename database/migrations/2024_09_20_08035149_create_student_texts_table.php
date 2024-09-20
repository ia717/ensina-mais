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
        Schema::create('student_texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('title_id')->constrained('text_title')->onDelete('cascade');
            $table->foreignId('eixo_id')->constrained('tematic_axis')->onDelete('cascade');
            $table->foreignId('vest_id')->constrained('vestibular')->onDelete('cascade');
            $table->integer('number_line');
            $table->integer('number_word');
            $table->integer('paragraphs');
            $table->time('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_texts');
    }
};
