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
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->string('button_id'); // Identificador único del botón
            $table->foreignId('user_id')->nullable()->constrained(); // Usuario si está autenticado
            $table->string('token', 64)->unique();
            $table->string('contenido')->nullable();
            /*
            $table->string('proposito')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table->boolean('is_used')->default(false);
            $table->ipAddress('ip_address', 45)->nullable();
            $table->json('metadata')->nullable(); // Datos adicionales
            $table->timestamps();
            $table->enum('eva', [1,2,3,4,5,6,7,8,9,10]);
            $table->set('likert', [
                'Muy de Acuerdo',
                 'De Acuerdo',
                 'Ni de acuerdo ni en desacuerdo',
                 'En desacuerdo',
                 'Muy en desacuerdo',
            ])->nullable();
*/
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};
