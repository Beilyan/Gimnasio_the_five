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
        Schema::create('pago_membresias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('membresia_id');
            $table->date('fecha_compra');
            $table->date('fecha_expira');
            $table->char('estatus', 1)->default('1');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('membresia_id')->references('id')->on('membresias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago_membresias');
    }
};
