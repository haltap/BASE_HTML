<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioDemoSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@clase.test'],
            [
                'name' => 'Usuario Demo',
                'password' => Hash::make('Clase2026!'),
            ]
        );
    }
}