<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movimientos_inventario', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('descripcion');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('dependencia_id');
            $table->timestamps();

            // Claves foráneas
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('dependencia_id')->references('id')->on('dependencias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('movimientos_inventario');
    }
};
