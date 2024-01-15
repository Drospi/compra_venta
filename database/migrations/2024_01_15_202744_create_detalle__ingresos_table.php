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
        Schema::create('detalle__ingresos', function (Blueprint $table) {
            $table->id();
            $table->integer('idingreso');
            $table->foreignId('idarticulo')->constrained('articulos');
            $table->float('precio_compra');
            $table->float('precio_venta');
            $table->integer('stock_inicial');
            $table->string('stock_actual');
            $table->date('fecha_produccion');
            $table->date('fecha_vencimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__ingresos');
    }
};
