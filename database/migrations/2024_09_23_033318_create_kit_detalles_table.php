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
        Schema::create('kitDetalles', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idKit');
            $table->unsignedBigInteger('idHerramienta');

           
            $table->foreign('idKit')->references('id')->on('kitHerramientas')->onDelete('cascade');
            $table->foreign('idHerramienta')->references('id')->on('herramientas')->onDelete('cascade');

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
        Schema::dropIfExists('kit_detalles');
    }
};
