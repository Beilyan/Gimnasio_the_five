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
            $table->string('cod_producto', 25)->unique();
            $table->string('nom_producto', 250);
            $table->integer('stock');
            $table->decimal('precio_compra', 6, 2);
            $table->decimal('precio_venta', 6, 2);
            $table->unsignedBigInteger('proveedor_id');
            $table->char('estatus', 1)->default('1');       
            $table->timestamps();
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
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
