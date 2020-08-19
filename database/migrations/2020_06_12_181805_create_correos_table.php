<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorreosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correos', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('asunto');
            $table->longText('mensaje');

            $table->date('fecha_respuesta')->nullable();
            $table->bigInteger('id_user_respuesta')->nullable();
            $table->longText('respuesta')->nullable();

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
        Schema::dropIfExists('correos');
    }
}
 