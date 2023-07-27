<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawan_rapat')->insert([
            [
                'rapat_id' => 1,
                'karyawan_nip' => 190282637182,
                'kehadiran' => 'Hadir',
                'keterangan' => '' 
            ],
            [
                'rapat_id' => 1,
                'karyawan_nip' => 182930485766,
                'kehadiran' => 'Tidak Hadir',
                'keterangan' => 'Sakit'
            ],
            [
                'rapat_id' => 2,
                'karyawan_nip' => 190282637182,
                'kehadiran' => 'Hadir',
                'keterangan' => ''
            ],    
        ]);
    }
}
