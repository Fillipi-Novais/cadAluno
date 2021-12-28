<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->string('filial');
            $table->string('curso');
            $table->string('habilitacao');
            $table->string('periodo');
            $table->integer('periodoLetivo');
            $table->string('tipoBolsa')->nullable();
            $table->string('planoPgto');
            $table->string('statusMatricula');
            $table->string('respAcademico');
            $table->string('respFinanceiro');
            $table->string('respMatricula');
            $table->biginteger('cpf')->nullable();
            $table->string('nome');
            $table->string('sexo');
            $table->date('dataNascimento');
            $table->string('email')->nullable();
            $table->biginteger('telefone');
            $table->string('nomeMae');
            $table->biginteger('cpfMae');
            $table->string('nomePai');
            $table->biginteger('cpfPai');
            $table->string('rua');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->biginteger('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
