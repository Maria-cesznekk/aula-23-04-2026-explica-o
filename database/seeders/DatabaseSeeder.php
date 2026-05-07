<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@senai.br',
            'password' => Hash::make('123'),
        ]);
        Produto::create([
            'name' => 'martelo',
            'valor' => 50.90,
            'qtd_estoque'=>0,
            'qtd_minima' => 5,
        ]);
        Produto::create([
            'name' => 'Alicate',
            'valor' => 30,
            'qtd_estoque' => 0,
              'qtd_minima' => 3,
        ]);
        Produto::create([
            'name' => 'Furadeira',
            'valor' => 99.99,
            'qtd_estoque' => 0,
              'qtd_minima' => 8,
        ]);
    }
}
