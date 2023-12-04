<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('marca_producto',20);
            $table->string('modelo_producto',40);
            $table->string('tipo_producto',50);
            $table->Double('precio_costo');
            $table->Double('precio_unitario');
            $table->Double('precio_mayore');
            $table->foreignId('id_proveedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
