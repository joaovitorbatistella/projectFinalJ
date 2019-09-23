<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivel');
            $table->string('telefone');
            $table->string('cpf');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rua');
            $table->string('numero');
            $table->string('cidade');
            $table->string('uf');
            $table->string('bairro');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
