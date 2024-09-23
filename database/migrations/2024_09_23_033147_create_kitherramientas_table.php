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
        Schema::create('kitHerramientas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 100);
            $table->unsignedBigInteger('idArea');
            $table->string('estado',25);
            
            $table->foreign('idArea')->references('id')->on('areas')->onDelete('cascade');

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
        Schema::dropIfExists('kitherramientas');
    }
};
