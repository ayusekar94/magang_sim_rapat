<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Moderator;

class ModeratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Moderator::create([
            'rapat_id' => 1,
            'nama_moderator' => 'Michael Brown',
        ]);

        // Rapat dengan ID 2
        Moderator::create([
            'rapat_id' => 2,
            'nama_moderator' => 'Sarah Lee',
        ]);
    }
}
