<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tasca;
use App\Models\Categoria;

class TascaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = Categoria::first();
        Tasca::create([
            'titol'    => 'Estudiar PHP',
            'descripcio'   => 'estudiar molt',
            'prioritat'  => 'alta',
            'stat'  => 'en_curs',
            'categoria_id' => $categoria->id,
        ]);
    }
}
