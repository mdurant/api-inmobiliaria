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
        Schema::create('unidades', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('numero');
            $table->enum('tipo_unidad', ['Departamento', 'Casa', 'Oficina', 'Estacionamiento', 'Bodega', 'Otro']);
            $table->string('metraje');
            $table->double('precio');
            $table->enum('estado', ['Disponible', 'Vendido(a)', 'Reservado', 'Otro']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades');
    }
};
