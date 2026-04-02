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
        Schema::table('users', function (Blueprint $table) {
            $table->string('tipo')->after('password');
            $table->string('avatar')->after('name')->nullable();
            $table->string('password')->nullable()->change();
            $table->string('api_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('tipo', 'avatar', 'password', 'api_id');
            $table->string('password')->change();
        });
    }
};