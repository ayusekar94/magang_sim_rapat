<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peserta;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peserta::create([
            'rapat_id' => 1,
            'nama_peserta' => 'John Doe',
            'jabatan' => 'Manager',
            'divisi' => 'Teknologi Informasi'
        ]);

        // Rapat dengan ID 1
        Peserta::create([
            'rapat_id' => 1,
            'nama_peserta' => 'Jane Smith',
            'jabatan' => 'Staff',
            'divisi' => 'Teknologi Informasi'
        ]);

        // Rapat dengan ID 2
        Peserta::create([
            'rapat_id' => 2,
            'nama_peserta' => 'Alice Johnson',
            'jabatan' => 'Kepala Departemen',
            'divisi' => 'Akuntansi'
        ]);
    }
}
