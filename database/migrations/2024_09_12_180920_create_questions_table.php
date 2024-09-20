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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discipline_id')->constrained('disciplines')->onDelete('cascade');
            $table->foreignId('topic_id')->nullable()->constrained('topics')->onDelete('cascade');
            $table->foreignId('exam_board_id')->nullable()->constrained('exam_boards')->onDelete('set null');
            $table->text('statement'); // Enunciado da questão
            $table->string('type')->default('multiple_choice'); // Tipo de questão (múltipla escolha, dissertativa, etc.)
            $table->enum('difficulty_level', ['easy', 'medium', 'hard'])->default('medium');
            $table->text('solution')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
