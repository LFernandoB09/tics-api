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
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especialidad');
            $table->string('empresa');
            $table->string('puesto');
            $table->string('correoContacto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresados');
    }
};
