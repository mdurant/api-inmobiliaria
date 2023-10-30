<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('unidades', function (Blueprint $table) {
            // Clave foránea hacia proyectos_inmobiliarios
            $table->foreign('proyecto_inmobiliario_id')
                  ->references('id')->on('proyecto_inmobiliarios')
                  ->onDelete('cascade');

            // Clave foránea hacia clientes (permitiendo que sea nula)
            $table->foreign('cliente_id')
                  ->references('id')->on('clientes')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('unidades', function (Blueprint $table) {
            // Remover las claves foráneas y las columnas
            $table->dropForeign(['proyecto_inmobiliario_id']);
            $table->dropColumn('proyecto_inmobiliario_id');

            $table->dropForeign(['cliente_id']);
            $table->dropColumn('cliente_id');
        });
    }
};
