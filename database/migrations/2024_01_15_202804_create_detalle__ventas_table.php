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
        Schema::create('detalle__ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idventa')->constrained('ventas');
            $table->foreignId('iddetalle_ingreso')->constrained('detalle__ingresos');
            $table->integer('cantidad');
            $table->float('precio_venta');
            $table->float('descuento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__ventas');
    }
};
