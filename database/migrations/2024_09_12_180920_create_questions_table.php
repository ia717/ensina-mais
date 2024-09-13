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
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->foreignId('topic_id')->nullable()->constrained('topics')->onDelete('cascade');
            $table->text('statement'); // Enunciado da questão
            $table->string('type')->default('multiple_choice'); // Tipo de questão (múltipla escolha, dissertativa, etc.)
            $table->foreignId('correct_answer_id')->nullable()->constrained('question_answers')->onDelete('set null'); // Resposta correta
            $table->boolean('is_high_relevance')->default(false); // Se é de alta relevância
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
