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
            'isi_notulensi' => 'Pembahasan proyek X mencapai titik tengah, perlu aksi lanjutan dalam menghadapi kendala teknis.',
            'tindak_lanjut' => 'Tim pengembang akan melakukan uji coba terhadap solusi alternatif.',
            'catatan_penting' => 'Pastikan proyek selesai sesuai jadwal.',
        ]);

        // Rapat dengan ID 2
        Notulensi::create([
            'rapat_id' => 2,
            'isi_notulensi' => 'Departemen Y berhasil mencapai target kinerja bulan ini.',
            'tindak_lanjut' => 'Departemen akan mengoptimalkan proses kerja untuk meningkatkan efisiensi.',
            'catatan_penting' => 'Proyek X perlu kolaborasi dengan Departemen Y.',
        ]);
    }
}
