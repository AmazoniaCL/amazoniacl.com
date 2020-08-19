<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialCorreosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_correos', function (Blueprint $table) {
            $table->id();

            $table->datetime('fecha');
            $table->longText('respuesta');
            $table->integer('respondido')->nullable();
            $table->integer('id_respondio')->nullable();

            $table->foreignId('correos_id')
                ->constrained();

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
        Schema::dropIfExists('historial_correos');
    }
}
