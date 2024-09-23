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
        Schema::create('reporteTareasFinalizada', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idTarea');
            $table->string('descripcion', 255);
            $table->date('fechaFinalizacion');

            $table->foreign('idTarea')->references('id')->on('tareas')->onDelete('cascade');
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
        Schema::dropIfExists('reportetareasfinalizada');
    }
};
