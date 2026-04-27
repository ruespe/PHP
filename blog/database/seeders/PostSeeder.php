<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;º
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $user = User::first(); // coger un usuario existente

    Post::create([
        'title' => 'Primer post',
        'content' => 'Contenido de prueba',
        'user_id' => $user->id
    ]);

    Post::create([
        'title' => 'Segundo post',
        'content' => 'Otro contenido',
        'user_id' => $user->id
    ]);

    }
}
