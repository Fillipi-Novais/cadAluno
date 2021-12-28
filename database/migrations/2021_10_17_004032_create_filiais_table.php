<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiliaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('NOMEFANTASIA');
            $table->string('NOME');
            $table->bigInteger('INSCRICAOESTADUAL');
            $table->integer('TELEFONE');
            $table->string('EMAIL');
            $table->string('RUA');
            $table->Integer('NUMERO');
            $table->string('COMPLEMENTO');
            $table->string('BAIRRO');
            $table->string('CIDADE');
            $table->string('ESTADO');
            $table->string('PAIS');
            $table->bigInteger('CEP');
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
        Schema::dropIfExists('filiais');
    }
}
