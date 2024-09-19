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
        Schema::create('text_title', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('vest_id')->constrained('vestibular')->onDelete('cascade');
            $table->foreignId('eixo_id')->constrained('tematic_axis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_title');
    }
};
