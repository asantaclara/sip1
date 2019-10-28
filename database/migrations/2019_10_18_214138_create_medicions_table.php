<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('tipo_id');
            $table->integer('profesional_id');
            $table->integer('peso');
            $table->integer('masa_muscular');
            $table->integer('masa_grasa');
            $table->date('fecha');
            $table->integer('altura');
            $table->string('contenido');
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
        Schema::dropIfExists('medicions');
    }
}
