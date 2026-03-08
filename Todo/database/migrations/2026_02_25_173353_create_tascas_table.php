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
        Schema::create('tasques', function (Blueprint $table) {
            $table->id();
            $table->string('titol');
            $table->text(column: 'descripcio')->nullable();
            $table->enum('prioritat', ['baixa', 'mitjana', 'alta'])->default('mitjana');
            $table->enum('status', ['pendent', 'en_curs', 'completada'])->default('pendent');

            // Relació N → 1 amb categories

            $table->foreignId('categoria_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps(); // Per control de creació i actualització

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasques');
    }
};
