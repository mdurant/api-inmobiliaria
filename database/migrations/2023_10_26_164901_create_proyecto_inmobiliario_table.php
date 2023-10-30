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
        Schema::create('proyecto_inmobiliarios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre_proyecto');
            $table->text('descripcion');
            $table->string('ubicacion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->enum('estado', ['En Construcción', 'Terminado', 'Cancelado', 'Otro']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto_inmobiliarios');
    }
};
