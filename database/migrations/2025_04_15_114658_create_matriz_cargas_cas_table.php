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
        Schema::create('matriz_cargas_cas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_funcionario')->nullable();
            $table->string('calidad')->nullable();
            $table->string('rutFuncionario')->nullable();
            $table->string('nombreFuncionario')->nullable();
            $table->string('nombreCarga')->nullable();
            $table->string('rutCarga')->nullable();
            $table->string('nacimientoCarga')->nullable();
            $table->string('sexo')->nullable();
            $table->string('parentesco')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriz_cargas_cas');
    }
};
