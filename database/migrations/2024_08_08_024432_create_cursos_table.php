<?php
// database/migrations/xxxx_xx_xx_create_cursos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('Id_Curso');
            $table->string('Nome');
            $table->string('Duracao');
            $table->string('Professor');
            $table->string('Itens_Aula');
            $table->text('Sobre');
            $table->string('Dias');
            $table->string('Foto')->nullable();
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
