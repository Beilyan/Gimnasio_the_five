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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
             // Fks
            $table->unsignedBigInteger('user_id');
            $table->string('nom_persona');
            $table->string('apaterno');
            $table->string('amaterno')->nullable();
            $table->date('fnac');
            $table->string('telefono', 25);
            $table->string('correo');
            $table->string('sexo');
            $table->integer('rol')->default(1);
            $table->timestamps();
            //Referenciar una Fk:
            $table-> foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
