<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456789', // password
            'remember_token' => Str::random(10),
    ])->assignRole('admin','donador');
    User::create([
        'name' => 'luis',
        'email' => 'luis@gmail.com',
        'email_verified_at' => now(),
        'password' => '123456789', // password
        'remember_token' => Str::random(10),
    ])->assignRole('donador');

    }
}
