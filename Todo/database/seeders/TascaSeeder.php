<?php

namespace Database\Seeders;

use App\Models\Tasca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TascaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tasca::create([
            'titol' => 'Laravel',
            'descripcio' => 'Estudiar Laravel',
            'prioritat' => 'alta',
            'status' => 'en_curs',
            'categoria_id' => 1,
        ]);
    }
}
