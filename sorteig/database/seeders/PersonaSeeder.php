<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('persones')->insert([
            [
                'dni'     => '11111111A',
                'nom'     => 'Joan',
                'cognom1' => 'Garcia',
                'cognom2' => 'López',
                'telefon' => '600111111',
                'correu'  => 'joan.garcia@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni'     => '22222222B',
                'nom'     => 'Maria',
                'cognom1' => 'Martínez',
                'cognom2' => 'Pérez',
                'telefon' => '600222222',
                'correu'  => 'maria.martinez@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni'     => '33333333C',
                'nom'     => 'Pere',
                'cognom1' => 'Sánchez',
                'cognom2' => 'Gómez',
                'telefon' => '600333333',
                'correu'  => 'pere.sanchez@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni'     => '44444444D',
                'nom'     => 'Anna',
                'cognom1' => 'Fernández',
                'cognom2' => 'Ruiz',
                'telefon' => '600444444',
                'correu'  => 'anna.fernandez@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni'     => '55555555E',
                'nom'     => 'Lluís',
                'cognom1' => 'Torres',
                'cognom2' => 'Díaz',
                'telefon' => '600555555',
                'correu'  => 'lluis.torres@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
