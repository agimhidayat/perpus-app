<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'role' => 'user',
            'password' => bcrypt('user'),
        ]);
        User::factory()->create([
            'name' => 'Petugas',
            'email' => 'petugas@petugas.com',
            'role' => 'petugas',
            'password' => bcrypt('petugas'),
        ]);
    }
}