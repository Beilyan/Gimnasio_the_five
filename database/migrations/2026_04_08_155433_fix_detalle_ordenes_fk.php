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
        Schema::table('detalle_ordenes', function (Blueprint $table) {
        $table->dropForeign(['ordenes_id']);
        $table->dropColumn('ordenes_id');

        $table->foreignId('orden_id')
            ->constrained('ordenes')
            ->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
