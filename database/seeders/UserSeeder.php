<?php

namespace Database\Seeders;


use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ana',
            'email' => 'ana@gmail.com',
            'password' => 'password',
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Ante',
            'email' => 'ante@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ana1',
            'email' => 'ana1@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ante1',
            'email' => 'ante1@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);
        User::create([
            'name' => 'Ana2',
            'email' => 'ana2@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ante2',
            'email' => 'ante2@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);
        
        User::create([
            'name' => 'Ana3',
            'email' => 'ana3@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ante3',
            'email' => 'ante3@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);
        User::create([
            'name' => 'Ana4',
            'email' => 'ana4@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ante4',
            'email' => 'ante4@gmail.com',
            'password' => 'password',
            'is_admin' => false
        ]);
    }
}
