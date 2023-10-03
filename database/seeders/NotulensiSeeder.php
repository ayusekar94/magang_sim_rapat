<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notulensi;

class NotulensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notulensi::create([
            'rapat_id' => 1,
            'catatan' => 'Pembahasan proyek X mencapai titik tengah, perlu aksi lanjutan dalam menghadapi kendala teknis.',
            'file' => ' ',
        ]);

        // Rapat dengan ID 2
        Notulensi::create([
            'rapat_id' => 2,
            'catatan' => 'Departemen Y berhasil mencapai target kinerja bulan ini.',
            'file' => ' ',
        ]);
    }
}
