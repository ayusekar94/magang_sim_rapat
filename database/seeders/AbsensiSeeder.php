<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Absensi;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Absensi::create([
            'rapat_id' => 1,
            'peserta_id' => 1,
            'kehadiran' => 'Hadir',
            'keterangan' => ''
        ]);

        // Rapat dengan ID 1
        Absensi::create([
            'rapat_id' => 1,
            'peserta_id' => 2,
            'kehadiran' => 'Tidak Hadir',
            'keterangan' => 'Sakit'
        ]);

        // Rapat dengan ID 2
        Absensi::create([
            'rapat_id' => 2,
            'peserta_id' => 3,
            'kehadiran' => 'Hadir',
            'keterangan' => ''
        ]);
    }
}
