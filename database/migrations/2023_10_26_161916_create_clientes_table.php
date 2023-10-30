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
        Schema::create('clientes', function (Blueprint $table) {
          $table->uuid('id')->primary();
          $table->string('rut');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('correoelectronico')->unique();
          $table->string('telefonocontacto')->nullable();
          $table->timestamp('fechacreacion')->useCurrent();
          $table->unique('rut');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
