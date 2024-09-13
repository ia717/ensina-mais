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
        Schema::create('student_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relação com o aluno (user)
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade'); // Relação com a questão
            $table->foreignId('answer_id')->nullable()->constrained('question_answers')->onDelete('cascade'); // Resposta múltipla escolha (opcional)
            $table->text('answer_text')->nullable(); // Resposta dissertativa (opcional)
            $table->boolean('is_correct')->nullable(); // Indica se a resposta está correta
            $table->timestamp('answered_at')->nullable(); // Data e hora da resposta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_questions');
    }
};
