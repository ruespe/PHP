<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Premi;

class PremiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Premi::create([
        //     'nom' => 'viatge',
        //     'valor' => '1200'
        // ]);
        $premis = [
        ['nom' => 'viatge', 'valor' => 1200],
        ['nom' => 'portàtil', 'valor' => 800],
        ['nom' => 'ratolí', 'valor' => 20],
        ['nom' => 'dinar', 'valor' => 50],
    ];
    foreach ($premis as $premi) {
        Premi::create($premi);
    }
    }
}
