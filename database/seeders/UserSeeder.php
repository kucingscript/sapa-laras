<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Sapa Laras',
            'email' => 'admin@localhost',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);
    }
}
