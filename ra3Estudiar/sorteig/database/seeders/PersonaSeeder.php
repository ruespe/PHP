<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea 5 persones de prova
        Persona::factory()->count(5)->create();

        //     \App\Models\Persona::create([
        //     'dni'      => '12345678A',
        //     'nom'      => 'Joan',
        //     'cognom1'  => 'Garcia',
        //     'cognom2'  => 'López',
        //     'telefon'  => '600123456',
        //     'correu'   => 'joan@example.com',
        // ]);

    }
}
