<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterandoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('endereco', 30);
            $table->integer('numero');
            $table->string('cidade', 30);
            $table->string('estado', 30);
            $table->integer('cpf');
            $table->integer('telefone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('endereco', 30);
            $table->integer('numero');
            $table->string('cidade', 30);
            $table->string('estado', 30);
            $table->integer('cpf');
            $table->integer('telefone');
        });
    }
}
