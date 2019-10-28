<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('tipo_id');
            $table->integer('profesional_id');
            $table->string('contenido');
            $table->string('comentario_paciente');
            $table->string('comentario_profesional');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('finalizada');
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
        Schema::dropIfExists('actividads');
    }
}
