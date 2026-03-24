<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PremiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('premis')->insert([
            ['nom' => 'Ratolí', 'valor' => '20€', 'premis' => 'ratolí', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Cotxe', 'valor' => '20000€', 'premis' => 'cotxe', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Viatge', 'valor' => '1000€', 'premis' => 'viatge', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Dinar', 'valor' => '50€', 'premis' => 'dinar', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Massatge', 'valor' => '30€', 'premis' => 'massatge', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
