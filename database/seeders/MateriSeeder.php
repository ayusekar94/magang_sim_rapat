<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materi;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::create([
            'rapat_id' => 1,
            'judul_materi' => 'Presentasi Proyek X',
            'deskripsi_materi' => 'Presentasi mengenai proyek X dan perkembangan terkini.',
            'file_materi' => 'proyek_x_presentation.pdf',
        ]);

        // Rapat dengan ID 2
        Materi::create([
            'rapat_id' => 2,
            'judul_materi' => 'Laporan Departemen Y',
            'deskripsi_materi' => 'Laporan tentang kinerja departemen Y bulan ini.',
            'file_materi' => 'laporan_departemen_y.xlsx',
        ]);
    }
}
