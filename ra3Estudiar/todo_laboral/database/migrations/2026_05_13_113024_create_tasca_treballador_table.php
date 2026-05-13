<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    // Crea la taula física a la base de dades anomenada 'tasca_treballador'
    Schema::create('tasca_treballador', function (Blueprint $table) {
        
        // Defineix una columna per a l'ID de la tasca (ha de ser del mateix tipus que l'ID original)
        $table->unsignedBigInteger('tasca_id');
        
        // Defineix una columna per al DNI del treballador (tipus string, com el camp original)
        $table->string('treballador_dni');

        // Estableix que 'tasca_id' és una clau forana que apunta al camp 'id' de la taula 'tasques'
        $table->foreign('tasca_id')
              ->references('id')->on('tasques')
              // Si s'esborra la tasca, s'esborren automàticament les seves relacions en aquesta taula
              ->onDelete('cascade');

        // Estableix que 'treballador_dni' és una clau forana que apunta al camp 'dni' de la taula 'treballadors'
        $table->foreign('treballador_dni')
              ->references('dni')->on('treballadors')
              // Si s'esborra el treballador, s'esborren les seves relacions per evitar dades orfes
              ->onDelete('cascade');

        // Crea una clau primària composta pels dos camps. 
        // Això impedeix que un mateix treballador estigui assignat dues vegades a la mateixa tasca.
        $table->primary(['tasca_id', 'treballador_dni']);
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasca_treballador');
    }
};
