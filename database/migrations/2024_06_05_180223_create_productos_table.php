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
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nombre');
            $table->boolean("activo")->default(true);
            $table->integer("inventario")->default(0);
            $table->string("codigo_de_barras")->nullable();
            $table->string("imagen")->nullable();
            $table->float("precio")->default(0.00);
            $table->text("descripcion")->nullable();
            $table->foreignId("sucursal_id")->constrained('sucursales');
            $table->foreignId("categoria_id")->constrained('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
