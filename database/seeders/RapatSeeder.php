<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rapat;

class RapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rapat::create([
            'divisi_id' => '1',
            'judul' => 'Rapat Proyek X',
            'tanggal' => '2023-07-25',
            'waktu_mulai' => '09:00:00',
            'waktu_selesai' => '11:00:00',
            'deskripsi' => 'Rapat pembahasan proyek X dengan tim pengembang.',
            'tempat' => 'Ruangan A',
        ]);

        Rapat::create([
            'divisi_id' => '2',
            'judul' => 'Rapat Departemen Y',
            'tanggal' => '2023-07-26',
            'waktu_mulai' => '14:00:00',
            'waktu_selesai' => '16:00:00',
            'deskripsi' => 'Rapat koordinasi departemen Y.',
            'tempat' => 'Ruangan B',
        ]);
    }
}
