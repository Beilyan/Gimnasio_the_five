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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('cod_venta', 25)->unique();
            $table->decimal('subtotal', 6, 2);
            $table->decimal('iva', 6, 2);
            $table->decimal('total', 6, 2);
            $table->date('fecha_pago');
            $table->unsignedBigInteger('empleado_id');
            $table->char('estatus', 1)->default('1');
            $table->timestamps();
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
