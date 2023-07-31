<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Undangan;

class UndanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Undangan::create([
            'email_penerima' => 'onynovii@gmail.com',
            'status_undangan' => 'Terkirim',
            'waktu_pengiriman' => '2023-07-26',
            'rapat_id' => 1,
        ]);
    }
}
