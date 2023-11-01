<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();

        User::create([
            'name' => 'dayat',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'phone' => '085432432466',
            'bio' => 'laravel dev',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Ahmad',
            'email' => 'super@gmail.com',
            'role' => 'superadmin',
            'phone' => '085432432456',
            'bio' => 'flutter dev',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
