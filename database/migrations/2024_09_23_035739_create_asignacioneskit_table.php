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
        Schema::create('asignacionesKit', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idKit');
            $table->date('fechaAsignacion');
            $table->unsignedBigInteger('idEmpleado');
            $table->unsignedBigInteger('idTareaAsignacion');

            $table->foreign('idKit')->references('id')->on('kitherramientas')->onDelete('cascade');
            $table->foreign('idEmpleado')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('idTareaAsignacion')->references('id')->on('tareas')->onDelete('cascade');
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
        Schema::dropIfExists('asignacioneskit');
    }
};
