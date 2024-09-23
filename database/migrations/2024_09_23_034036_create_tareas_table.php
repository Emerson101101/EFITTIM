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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('vehiculoId');
            $table->string('idCliente', 10);
            $table->string('descripcion', 255);
            $table->date('fechaCreacion');
            $table->integer('tiempoEstimado');
            $table->string('estado',20);

            $table->foreign('vehiculoId')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('idCliente')->references('DUI')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('tareas');
    }
};
