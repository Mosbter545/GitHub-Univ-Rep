<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('nombre'); // Nombre del producto
            $table->decimal('precio', 10, 2); // Precio con 2 decimales
            $table->integer('cantidad'); // Cantidad en inventario
            $table->text('descripcion')->nullable(); // Descripción opcional
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

