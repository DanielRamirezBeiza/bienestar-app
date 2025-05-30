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
        Schema::create('matrizs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rut');
            $table->string('nombre');
            $table->string('estadoAfiliacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matrizs');
    }
};
