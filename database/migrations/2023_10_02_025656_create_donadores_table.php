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
        Schema::create('donadores', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('dni');
            $table->string('talla');
            $table->string('fnacimiento');
            $table->string('peso');
            $table->string('sexo');
            $table->string('fecha')->nullable();
            $table->string('tipo');
            $table->string('telefono');
            $table->string('correo');
            $table->string('verificaccion');
            $table->string('terminos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donadores');
    }
};
