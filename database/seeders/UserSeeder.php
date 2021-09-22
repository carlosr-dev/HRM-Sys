<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Carlos Ramirez',
            'email' => 'carlos@example.com',
            'email_verified_at' => "2021-09-21",
            'password' => Hash::make('password'),
            'type_user' => 1
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'email_verified_at' => "2021-09-21",
            'password' => Hash::make('password'),
            'type_user' => 1
        ]);

        User::create([
            'name' => 'Sub Administrador',
            'email' => 'sub-admin@example.com',
            'email_verified_at' => "2021-09-21",
            'password' => Hash::make('password'),
            'type_user' => 0
        ]);
    }
}
