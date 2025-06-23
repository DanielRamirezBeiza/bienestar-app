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
        Schema::create('token_actions', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('action')->default('guardado'); // o 'clicked'
            $table->json('data')->nullable(); // aquí puedes guardar lo que quieras
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('token_actions');
    }
};
