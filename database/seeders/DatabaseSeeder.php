<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Cuauhtemoc Ramirez Prieto',
            'email' => 'cuauhtemocrmzp@gmail.com',
        ]);

        for ($i = 0; $i < 20; $i++) {
            \App\Models\Service::factory()->create([
                'service_id' => rand(1000, 7000),
            ]);
        }
    }
}
