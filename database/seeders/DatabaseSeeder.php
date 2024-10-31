<?php

namespace Database\Seeders;

use App\Models\Equipe;
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
            'username' => 'admin',
            'email' => 'admin@admin.com',
        ]);

        Equipe::create([
            'image' => 'secretaria.jpg',
            'equipe' => 'Secretária',
        ]);

        Equipe::create([
            'image' => 'cafezinho.jpg',
            'equipe' => 'Cafezinho',
        ]);

        Equipe::create([
            'image' => 'circulos.jpg',
            'equipe' => 'Circulos',
        ]);

        Equipe::create([
            'image' => 'compras.jpg',
            'equipe' => 'Compras',
        ]);

        Equipe::create([
            'image' => 'gracons.jpg',
            'equipe' => 'Graçons',
        ]);

        Equipe::create([
            'image' => 'limpeza.jpg',
            'equipe' => 'Limpeza',
        ]);

        Equipe::create([
            'image' => 'liturgia.jpg',
            'equipe' => 'Liturgia',
        ]);

        Equipe::create([
            'image' => 'mini-bar.jpg',
            'equipe' => 'Mini Bar',
        ]);

        Equipe::create([
            'image' => 'sala.jpg',
            'equipe' => 'Sala',
        ]);

        Equipe::create([
            'image' => 'sociodrama.jpg',
            'equipe' => 'Sociodrama',
        ]);

        Equipe::create([
            'image' => 'vigilia.png',
            'equipe' => 'Vigilia',
        ]);

        Equipe::create([
            'image' => 'dirigente.png',
            'equipe' => 'Dirigente',
        ]);

        Equipe::create([
            'image' => 'dirigente.png',
            'equipe' => 'Coordenação Geral',
        ]);

        Equipe::create([
            'image' => 'dirigente.png',
            'equipe' => 'Conselho Diosesano',
        ]);
    }
}
