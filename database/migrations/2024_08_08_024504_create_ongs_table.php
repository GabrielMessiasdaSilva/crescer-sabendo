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
        Schema::create('ongs', function (Blueprint $table) {
            $table->increments('Id_Ong');
            $table->string('Nome');
            $table->string('CNPJ', 18)->nullable();
            $table->string('Responsavel')->nullable();
            $table->string('CPF', 11)->nullable();
            $table->string('Endereco')->nullable();
            $table->string('CEP', 10)->nullable();
            $table->string('Estado', 2)->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Complemento')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->text('Linkdoacao')->nullable();
            $table->text('Sobre')->nullable();
            $table->string('Email')->nullable();
            $table->string('Senha')->nullable();
            $table->unsignedInteger('Id_Voluntario')->nullable();
            $table->unsignedInteger('Id_Curso')->nullable();
            $table->foreign('Id_Curso')->references('Id_Curso')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongs');
    }
};
