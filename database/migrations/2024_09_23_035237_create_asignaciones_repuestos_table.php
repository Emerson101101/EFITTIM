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
        Schema::create('asignacionesRepuestos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idTarea');
            $table->unsignedBigInteger('idRepuesto');
            $table->integer('cantidad');
            $table->string('fuenteRepuesto', 100);
            $table->decimal('precioTotal', 10, 2);

            $table->foreign('idTarea')->references('id')->on('tareas')->onDelete('cascade');
            $table->foreign('idRepuesto')->references('id')->on('repuestos')->onDelete('cascade');
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
        Schema::dropIfExists('asignaciones_repuestos');
    }
};
