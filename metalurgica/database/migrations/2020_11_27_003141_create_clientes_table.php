<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 30);
            $table->string('nome', 30);
            $table->string('email', 30);
            $table->string('senha', 30);
            $table->string('endereco', 30);
            $table->integer('numero');
            $table->string('cidade', 30);
            $table->string('estado', 30);
            $table->integer('cpf');
            $table->integer('telefone');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
