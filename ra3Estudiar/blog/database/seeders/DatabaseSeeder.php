<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name'     => 'admin',
            'email'    => 'rubenespin84@gmail.com',
            'password' => 'password',
            'role'     => 'admin',
        ]);

        // Editor
        $editor = User::create([
            'name'     => 'Editor',
            'email'    => 'editor@iesthosicodina.cat',
            'password' => 'password',
            'role'     => 'editor',
        ]);

        // User
        User::create([
            'name'     => 'User',
            'email'    => 'user@iesthosicodina.cat',
            'password' => 'password',
            'role'     => 'user',
        ]);

        // Posts per admin
        Post::factory(5)->create(['user_id' => $admin->id]);

        // Posts per editor
        Post::factory(5)->create(['user_id' => $editor->id]);
    }
}
