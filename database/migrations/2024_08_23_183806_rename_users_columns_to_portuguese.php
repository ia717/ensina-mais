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
        Schema::table('usuarios', function (Blueprint $table) {
            $table->renameColumn('name', 'nome');
            $table->renameColumn('email', 'email');
            $table->renameColumn('password', 'senha');
            $table->renameColumn('created_at', 'criado_em');
            $table->renameColumn('updated_at', 'atualizado_em');
            // Adicione mais renomeações conforme necessário
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->renameColumn('nome', 'name');
            $table->renameColumn('email', 'email');
            $table->renameColumn('senha', 'password');
            $table->renameColumn('criado_em', 'created_at');
            $table->renameColumn('atualizado_em', 'updated_at');
            // Reversão das renomeações, se necessário
        });
    }
};
