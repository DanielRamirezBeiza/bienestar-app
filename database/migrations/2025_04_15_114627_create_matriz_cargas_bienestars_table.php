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
        Schema::create('matriz_cargas_bienestars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_funcionario')->nullable();
            $table->string('rut_funcionario')->nullable();
            $table->string('nombre_carga')->nullable();
            $table->string('rut_carga')->nullable();
            $table->string('fecha_nacimiento_carga')->nullable();
            $table->string('fecha_vencimiento')->nullable();
            $table->string('tipo_carga')->nullable();
            $table->string('cod_parent')->nullable();
            $table->string('vigencia_carga_estado')->nullable();
            $table->string('vigencia_afiliacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriz_cargas_bienestars');
    }
};
