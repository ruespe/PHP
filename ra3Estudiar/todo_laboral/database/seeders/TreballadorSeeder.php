<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Treballador;

class TreballadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Treballador::create([
            'dni' => '11111111C',
            'nom' => 'Pere',
            'cognom1' => 'Vila',
            'cognom2' => 'Vila',
            'correu' => 'pere@exemple.com',
            'telefon' => '600111222'
        ]);
        Treballador::create([
            'dni' => '22222222D',
            'nom' => 'Anna',
            'cognom1' => 'Pou',
            'cognom2' => 'García',
            'correu' => 'anna@exemple.com',
            'telefon' => '600333444'
        ]);
    }
}
