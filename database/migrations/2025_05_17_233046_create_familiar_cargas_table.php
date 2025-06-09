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
        Schema::create('familiar_cargas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('carga_nombre');
            /*
            $table->string('carga_rut');
            $table->string('beneficiario_nombre');
            $table->string('beneficiario_rut');
            $table->string('direccion');
            $table->string('cod_causal_crearCargaFamiliar');
            $table->string('certificado_parentesco')->nullable();
            */
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familiar_cargas');
    }
};
