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
        Schema::create('pedidosRepuesto', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idTarea');
            $table->date('fechaPedido');
            $table->decimal('precioUnitario', 10, 2);
            $table->integer('cantidadPedida');
            $table->date('fechaEstimadaEntrega');
            $table->string('proveedor', 100);

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
        Schema::dropIfExists('pedidos_repuesto');
    }
};
