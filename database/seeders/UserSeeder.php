<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat User Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@resto.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Membuat User Kasir
        User::create([
            'name' => 'Kasir User',
            'email' => 'kasir@resto.com',
            'password' => Hash::make('password123'),
            'role' => 'kasir',
        ]);
    }
}