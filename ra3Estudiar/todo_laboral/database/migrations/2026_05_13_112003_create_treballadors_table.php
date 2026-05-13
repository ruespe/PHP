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
        Schema::create('treballadors', function (Blueprint $table) {
            $table->string('dni')->primary(); // no es $table->id(); porque el id es dni
            $table->string('nom');
            $table->string('cognom1');
            $table->string('cognom2');
            $table->string('correu');
            $table->integer('telefon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treballadors');
    }
};
