<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call([
            RapatSeeder::class,
            PesertaSeeder::class,
            MateriSeeder::class,
            ModeratorSeeder::class,
            NotulensiSeeder::class,
            AbsensiSeeder::class,
            UserSeeder::class,
        ]);
    }
}
