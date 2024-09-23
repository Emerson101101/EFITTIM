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
        Schema::create('asignacionesTareas', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idTarea');
            $table->unsignedBigInteger('idEmpleado');
            $table->enum('estado', ['pendiente', 'en progreso', 'completada'])->default('pendiente');
            $table->unsignedBigInteger('idArea');
            $table->unsignedBigInteger('idServicio');

            $table->foreign('idTarea')->references('id')->on('tareas')->onDelete('cascade');
            $table->foreign('idEmpleado')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('idArea')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('idServicio')->references('id')->on('servicios')->onDelete('cascade');
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
        Schema::dropIfExists('asignacionestareas');
    }
};
