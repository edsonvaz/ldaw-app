<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_metodo')->nullable();
            $table->integer('id_categoria')->nullable();
            $table->string('nombre');
            $table->string('siglas');
            $table->text('descripcion');
            $table->integer('duracion');
            $table->integer('cupo');
            $table->integer('costo');
            $table->string('lugar');
            $table->boolean('activo');
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
        Schema::dropIfExists('eventos');
    }
};
